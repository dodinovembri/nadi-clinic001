<?php

namespace App\Controllers\Frontend;

use App\Models\ClientConfigModel;

class BuildController extends BaseController
{
    public function index($app_id, $client_id, $prefix)
    {
        // connect db
        $db = \Config\Database::connect();
        $builder = $db->table("clinic001_default_config");
        // get app
        $app = $builder->where('app_id', $app_id)->get()->getFirstRow();
        if ($app) {
            $client_config = $db->table("clinic001_default_client_config");
            $client_config_data = $client_config->where('app_id', $app_id)->where('client_id', $client_id)->get()->getFirstRow();
            if ($client_config_data) {
                session()->setFlashdata('info', 'You already have an account, please login to continue.');
                return redirect()->to(base_url($prefix.'/ext-login'));
            }else{
                // insert to client config
                $client_config = new ClientConfigModel();
                $client_config->insert([
                    'created_at' => date('Y-m-d H:i:s'),
                    'status' => 1,
                    'client_id' => $client_id,
                    'app_id' => $app_id,
                    'domain_live_url' => base_url(),
                    'trial_access_name' => $prefix,
                    'is_production' => 0
                ]);
                // create table
                $db->query("CREATE TABLE `clinic001_$prefix" . "_about` AS SELECT * FROM `clinic001_default_about`");
                $db->query("CREATE TABLE `clinic001_$prefix" . "_appointments` AS SELECT * FROM `clinic001_default_appointments`");
                $db->query("CREATE TABLE `clinic001_$prefix" . "_appointment_types` AS SELECT * FROM `clinic001_default_appointment_types`");
                $db->query("CREATE TABLE `clinic001_$prefix" . "_benefits` AS SELECT * FROM `clinic001_default_benefits`");
                $db->query("CREATE TABLE `clinic001_$prefix" . "_blogs` AS SELECT * FROM `clinic001_default_blogs`");
                $db->query("CREATE TABLE `clinic001_$prefix" . "_blog_categories` AS SELECT * FROM `clinic001_default_blog_categories`");
                $db->query("CREATE TABLE `clinic001_$prefix" . "_blog_comments` AS SELECT * FROM `clinic001_default_blog_comments`");
                $db->query("CREATE TABLE `clinic001_$prefix" . "_clinics` AS SELECT * FROM `clinic001_default_clinics`");
                $db->query("CREATE TABLE `clinic001_$prefix" . "_config` AS SELECT * FROM `clinic001_default_config`");
                $db->query("CREATE TABLE `clinic001_$prefix" . "_config_menus` AS SELECT * FROM `clinic001_default_config_menus`");
                $db->query("CREATE TABLE `clinic001_$prefix" . "_departments` AS SELECT * FROM `clinic001_default_departments`");
                $db->query("CREATE TABLE `clinic001_$prefix" . "_department_galleries` AS SELECT * FROM `clinic001_default_department_galleries`");
                $db->query("CREATE TABLE `clinic001_$prefix" . "_department_services` AS SELECT * FROM `clinic001_default_department_services`");
                $db->query("CREATE TABLE `clinic001_$prefix" . "_department_timetables` AS SELECT * FROM `clinic001_default_department_timetables`");
                $db->query("CREATE TABLE `clinic001_$prefix" . "_faqs` AS SELECT * FROM `clinic001_default_faqs`");
                $db->query("CREATE TABLE `clinic001_$prefix" . "_footer_features` AS SELECT * FROM `clinic001_default_footer_features`");
                $db->query("CREATE TABLE `clinic001_$prefix" . "_laboratory_features` AS SELECT * FROM `clinic001_default_laboratory_features`");
                $db->query("CREATE TABLE `clinic001_$prefix" . "_medical_cares` AS SELECT * FROM `clinic001_default_medical_cares`");
                $db->query("CREATE TABLE `clinic001_$prefix" . "_sliders` AS SELECT * FROM `clinic001_default_sliders`");
                $db->query("CREATE TABLE `clinic001_$prefix" . "_slider_features` AS SELECT * FROM `clinic001_default_slider_features`");
                $db->query("CREATE TABLE `clinic001_$prefix" . "_teams` AS SELECT * FROM `clinic001_default_teams`");
                $db->query("CREATE TABLE `clinic001_$prefix" . "_testimonials` AS SELECT * FROM `clinic001_default_testimonials`");
                $db->query("CREATE TABLE `clinic001_$prefix" . "_tweets` AS SELECT * FROM `clinic001_default_tweets`");
                $db->query("CREATE TABLE `clinic001_$prefix" . "_users` AS SELECT * FROM `clinic001_default_users`");

                return redirect()->to(base_url($prefix.'/extranet'));
            }
        } else {
            return redirect()->to(base_url('/'));
        }
    }
}
