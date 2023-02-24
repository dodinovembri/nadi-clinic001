<?php

namespace App\Controllers\Frontend;

use App\Models\ConfigModel;
use App\Models\ConfigMenuModel;
use App\Models\FooterFeatureModel;
use App\Models\ConfigSocialMediaModel;

class DepartmentController extends BaseController
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
        // social media
        $config_social_media = new ConfigSocialMediaModel();
        $data['social_medias'] = $config_social_media->get()->getResult();                                  

        return view('frontend/department/index', $data);
    }
}
