<?php

namespace App\Controllers\Frontend;

use App\Models\ConfigModel;
use App\Models\DepartmentModel;
use App\Models\SliderModel;
use App\Models\SliderFeatureModel;
use App\Models\FooterFeatureModel;
use App\Models\ConfigSocialMediaModel;
use App\Models\AppointmentTypeModel;
use App\Models\BlogModel;

class Homecontroller extends BaseController
{
    public function index()
    {
        // configuration
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
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
        // social media
        $config_social_media = new ConfigSocialMediaModel();
        $data['social_medias'] = $config_social_media->get()->getResult();   
        // apppointment type
        $appointment = new AppointmentTypeModel();
        $data['appointment_types'] = $appointment->get()->getResult();  
        // blog
        $blog = new BlogModel();
        $data['blogs'] = $blog->get()->getResult();                                   

        return view('frontend/home/index', $data);
    }
}
