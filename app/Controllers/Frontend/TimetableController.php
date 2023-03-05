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
        $first_department = $department->get()->getFirstRow();                          
        $data['department'] = $first_department;
        // footer feature
        $footer_feature = new FooterFeatureModel();
        $data['footer_features'] = $footer_feature->get()->getResult();
        // blog
        $blog = new BlogModel();
        $data['blogs'] = $blog->get()->getResult();  
        $db = \Config\Database::connect();
        $data['blogs'] = $db->query('
            SELECT 
                clinic001_blogs.*,
                clinic001_blog_categories.name as category_name
            FROM clinic001_blogs JOIN clinic001_blog_categories
            ON clinic001_blogs.blog_category_id = clinic001_blog_categories.id
            WHERE clinic001_blogs.status != 0
        ')->getResult();
        // tweets
        $tweet = new TweetModel();
        $data['tweets'] = $tweet->get()->getResult();  
        // department timetable
        $department_timetable = new DepartmentTimetableModel();
        $data['department_timetables'] = $department_timetable->where('department_id', $first_department->id)->get()->getResult();                                         

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
        $data['department'] = $department->where('id', $id)->get()->getFirstRow();          
        // footer feature
        $footer_feature = new FooterFeatureModel();
        $data['footer_features'] = $footer_feature->get()->getResult();
        // blog
        $blog = new BlogModel();
        $data['blogs'] = $blog->get()->getResult();  
        $db = \Config\Database::connect();
        $data['blogs'] = $db->query('
            SELECT 
                clinic001_blogs.*,
                clinic001_blog_categories.name as category_name
            FROM clinic001_blogs JOIN clinic001_blog_categories
            ON clinic001_blogs.blog_category_id = clinic001_blog_categories.id
            WHERE clinic001_blogs.status != 0
        ')->getResult();
        // tweets
        $tweet = new TweetModel();
        $data['tweets'] = $tweet->get()->getResult();  
        // department timetable
        $department_timetable = new DepartmentTimetableModel();
        $data['department_timetables'] = $department_timetable->where('department_id', $id)->get()->getResult();                                         

        return view('frontend/timetable/index', $data);
    }    
}
