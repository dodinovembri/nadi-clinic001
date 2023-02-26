<?php

namespace App\Controllers\Frontend;

use App\Models\ConfigModel;
use App\Models\ConfigMenuModel;
use App\Models\DepartmentModel;
use App\Models\FooterFeatureModel;
use App\Models\BlogModel;
use App\Models\TweetModel;
use App\Models\MedicalCareModel;
use App\Models\ClinicModel;
use App\Models\TestimonialModel;

class MedicalCareController extends BaseController
{
    public function index()
    {
        // configuration
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        // configuration menu
        $config_menu = new ConfigMenuModel();
        $data['config_menu'] = $config_menu->get()->getFirstRow();           
        // footer feature
        $footer_feature = new FooterFeatureModel();
        $data['footer_features'] = $footer_feature->get()->getResult();  
        // department
        $department = new DepartmentModel();
        $data['departments'] = $department->get()->getResult();  
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
        // medical care
        $medical_care = new MedicalCareModel();
        $data['medical_cares'] = $medical_care->get()->getResult();                                         
        $data['medical_care_count'] = $medical_care->countAllResults();  
        // department
        $clinic = new ClinicModel();
        $data['clinics'] = $clinic->get()->getResult();   
        // testimonial
        $testimonial = new TestimonialModel();
        $data['testimonials'] = $testimonial->get()->getResult();                  

        return view('frontend/medical_care/index', $data);
    }
}
