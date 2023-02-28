<?php

namespace App\Controllers\Frontend;

use App\Models\ConfigModel;
use App\Models\ConfigMenuModel;
use App\Models\DepartmentModel;
use App\Models\DepartmentTimetableModel;
use App\Models\FooterFeatureModel;
use App\Models\BlogModel;
use App\Models\TweetModel;

class TimetableController extends BaseController
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
        // department timetable
        $department_timetable = new DepartmentTimetableModel();
        $data['department_timetables'] = $department_timetable->get()->getResult();                                         

        return view('frontend/timetable/index', $data);
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
        // department timetable
        $department_timetable = new DepartmentTimetableModel();
        $data['department_timetables'] = $department_timetable->get()->getResult();                                         

        return view('frontend/timetable/show', $data);
    }    
}
