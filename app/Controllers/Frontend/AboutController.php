<?php

namespace App\Controllers\Frontend;

use App\Models\ConfigModel;
use App\Models\ConfigMenuModel;
use App\Models\DepartmentModel;
use App\Models\FooterFeatureModel;
use App\Models\TweetModel;
use App\Models\AboutModel;
use App\Models\FaqModel;
use App\Models\BenefitModel;
use App\Models\TeamModel;

class AboutController extends BaseController
{
    public function index()
    {
        // db connect
        $db = \Config\Database::connect();
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
        // about
        $about = new AboutModel();
        $data['about'] = $about->get()->getFirstRow();     
        // faqs
        $faq = new FaqModel();
        $data['faqs'] = $faq->get()->getResult();
        // benefit
        $benefit = new BenefitModel();
        $data['benefits'] = $benefit->get()->getResult(); 
        // team
        $team = new TeamModel();
        $data['teams'] = $team->get()->getResult();                

        return view('frontend/about/index', $data);
    }
}
