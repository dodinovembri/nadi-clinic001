<?php

namespace App\Controllers\Frontend;

class Homecontroller extends BaseController
{
    public function index()
    {
        // connect db
        $db = \Config\Database::connect();
        // client config
        $client_config = $db->table('clinic001_default_client_config');
        $client_config_data = $client_config->where("domain_live_url", base_url())->get()->getFirstRow();
        if ($client_config_data->is_production == 1) {
            $trial_access_name = $client_config_data->trial_access_name;
        }else{
            $uri = new \CodeIgniter\HTTP\URI(current_url());
            $trial_access_name = $uri->getSegment(2);
        }
        // config
        $config = $db->table("clinic001_" . $trial_access_name . "_config");
        $data['config']   = $config->get()->getFirstRow();
        // config menu
        $config_menu = $db->table("clinic001_" . $trial_access_name . "_config_menus");
        $data['config_menu'] = $config_menu->get()->getFirstRow();
        // department
        $department = $db->table("clinic001_" . $trial_access_name . "_departments");
        $data['departments'] = $department->get()->getResult();
        // slider
        $slider = $db->table("clinic001_" . $trial_access_name . "_sliders");
        $data['sliders'] = $slider->get()->getResult();
        // slider feature
        $slider_feature = $db->table("clinic001_" . $trial_access_name . "_slider_features");
        $data['slider_features'] = $slider_feature->get()->getResult();
        // footer feature
        $footer_feature = $db->table("clinic001_" . $trial_access_name . "_footer_features");
        $data['footer_features'] = $footer_feature->get()->getResult();
        // apppointment type
        $appointment = $db->table("clinic001_" . $trial_access_name . "_appointments");
        $data['appointment_types'] = $appointment->get()->getResult();
        // blog
        $blog = $db->table("clinic001_" . $trial_access_name . "_blogs");
        $data['blogs'] = $blog->get()->getResult();
        // blog & blog categories
        $clinic001_blogs = "clinic001_" . $trial_access_name . "_blogs";
        $clinic001_blog_categories = "clinic001_" . $trial_access_name . "_blog_categories";
        $data['blogs'] = $db->query("
            SELECT 
                $clinic001_blogs.*,
                $clinic001_blog_categories.name as category_name
            FROM $clinic001_blogs JOIN $clinic001_blog_categories
            ON $clinic001_blogs.blog_category_id = $clinic001_blog_categories.id
            WHERE $clinic001_blogs.status != 0
        ")->getResult();
        // tweets
        $tweet = $db->table("clinic001_" . $trial_access_name . "_tweets");
        $data['tweets'] = $tweet->get()->getResult();

        return view('frontend/home/index', $data);
    }
}
