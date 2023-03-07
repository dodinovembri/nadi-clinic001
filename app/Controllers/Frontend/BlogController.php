<?php

namespace App\Controllers\Frontend;

use App\Models\ConfigModel;
use App\Models\ConfigMenuModel;
use App\Models\DepartmentModel;
use App\Models\FooterFeatureModel;
use App\Models\BlogModel;
use App\Models\BlogCategoryModel;
use App\Models\TweetModel;

class BlogController extends BaseController
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
        // configuration menu
        $config_menu = $db->table("clinic001_" . $trial_access_name . "_config_menus");
        $data['config_menu'] = $config_menu->get()->getFirstRow();
        // department
        $department = $db->table("clinic001_" . $trial_access_name . "_departments");
        $data['departments'] = $department->get()->getResult();
        // footer feature
        $footer_feature = $db->table("clinic001_" . $trial_access_name . "_footer_features");
        $data['footer_features'] = $footer_feature->get()->getResult();
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
        // blog category
        $blog_category = $db->table("clinic001_" . $trial_access_name . "_blog_categories");
        $data['blog_categories'] = $blog_category->get()->getResult();

        return view('frontend/blog/index', $data);
    }

    public function show($id)
    {
        // configuration
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        // configuration menu
        $config_menu = new ConfigMenuModel();
        $data['config_menu'] = $config_menu->get()->getFirstRow();
        // department
        $department = new DepartmentModel();
        $data['departments'] = $department->get()->getResult();
        // footer feature
        $footer_feature = new FooterFeatureModel();
        $data['footer_features'] = $footer_feature->get()->getResult();
        // blog
        $blog = new BlogModel();
        $data['blogs'] = $blog->get()->getResult();
        $db = \Config\Database::connect();
        $data['blog'] = $db->query("
            SELECT 
                clinic001_blogs.*,
                clinic001_blog_categories.name as category_name
            FROM clinic001_blogs JOIN clinic001_blog_categories
            ON clinic001_blogs.blog_category_id = clinic001_blog_categories.id
            WHERE clinic001_blogs.status != 0
            AND clinic001_blogs.id = '$id'
        ")->getFirstRow();
        // tweets
        $tweet = new TweetModel();
        $data['tweets'] = $tweet->get()->getResult();
        // blog category
        $blog_category = new BlogCategoryModel();
        $data['blog_categories'] = $blog_category->get()->getResult();

        return view('frontend/blog/show', $data);
    }
}
