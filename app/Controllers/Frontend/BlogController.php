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
        $data['blogs'] = $db->query('
            SELECT 
                blogs.*,
                blog_categories.name as category_name
            FROM blogs JOIN blog_categories
            ON blogs.blog_category_id = blog_categories.id
            WHERE blogs.status != 0
        ')->getResult(); 
        // tweets
        $tweet = new TweetModel();
        $data['tweets'] = $tweet->get()->getResult();  
        // blog category
        $blog_category = new BlogCategoryModel();
        $data['blog_categories'] = $blog_category->get()->getResult();                                   

        return view('frontend/blog/index', $data);
    }
}
