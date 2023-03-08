<?php

namespace App\Controllers\Frontend;

class AboutController extends BaseController
{
    public function index($trial_name = null)
    {
        // connect db
        $db = \Config\Database::connect();
        // client config
        $client_config = $db->table('clinic001_default_client_config');
        $client_config_data = $client_config->where("domain_live_url", base_url())->get()->getFirstRow();
        if ($client_config_data->is_production == 1) {
            $trial_access_name = $client_config_data->trial_access_name;
            $is_production = 1;
        } else {
            if ($trial_name != null) {
                $trial_access_name = $trial_name;
            } else {
                $trial_access_name = "default";
            }
            $is_production = 0;
        }
        // config
        $config = $db->table("clinic001_" . $trial_access_name . "_config");
        $data['config']   = $config->get()->getFirstRow();
        // configuration menu
        $config_menu = $db->table("clinic001_" . $trial_access_name . "_config_menus");
        $data['config_menu'] = $config_menu->get()->getFirstRow();
        // department
        $department = $db->table("clinic001_" . $trial_access_name . "_departments");
        $data['departments'] = $department->get()->getResult();
        // footer feature
        $footer_feature = $db->table("clinic001_" . $trial_access_name . "_footer_features");
        $data['footer_features'] = $footer_feature->get()->getResult();
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
        // about
        $about = $db->table("clinic001_" . $trial_access_name . "_about");
        $data['about'] = $about->get()->getFirstRow();     
        // faqs
        $faq = $db->table("clinic001_" . $trial_access_name . "_faqs");
        $data['faqs'] = $faq->get()->getResult();
        // benefit
        $benefit = $db->table("clinic001_" . $trial_access_name . "_benefits");
        $data['benefits'] = $benefit->get()->getResult(); 
        // team
        $team = $db->table("clinic001_" . $trial_access_name . "_teams");
        $data['teams'] = $team->get()->getResult();   
        // trial name
        $data['trial_name'] = $trial_name; 
        $data['is_production'] = $is_production;                    

        return view('frontend/about/index', $data);
    }
}
