<?php

namespace App\Controllers\Frontend;

use App\Models\ConfigModel;
use App\Models\ConfigMenuModel;
use App\Models\DepartmentModel;
use App\Models\SliderModel;
use App\Models\SliderFeatureModel;
use App\Models\FooterFeatureModel;
use App\Models\AppointmentTypeModel;
use App\Models\BlogModel;
use App\Models\TweetModel;

class Homecontroller extends BaseController
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
        // slider
        $slider = new SliderModel();
        $data['sliders'] = $slider->get()->getResult();
        // slider feature
        $slider_feature = new SliderFeatureModel();
        $data['slider_features'] = $slider_feature->get()->getResult();
        // footer feature
        $footer_feature = new FooterFeatureModel();
        $data['footer_features'] = $footer_feature->get()->getResult();
        // apppointment type
        $appointment = new AppointmentTypeModel();
        $data['appointment_types'] = $appointment->get()->getResult();
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

        return view('frontend/home/index', $data);
    }

    public function build($prefix)
    {
        $db = \Config\Database::connect();
        $db->query("CREATE TABLE clinic001_.$prefix.about AS SELECT * FROM clinic001.about");

        return redirect()->to(base_url('extranet'));
    }
}
