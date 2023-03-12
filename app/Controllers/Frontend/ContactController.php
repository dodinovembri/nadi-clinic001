<?php

namespace App\Controllers\Frontend;

use App\Models\ClientModel;
use App\Models\ConfigModel;
use App\Models\ConfigMenuModel;
use App\Models\DepartmentModel;
use App\Models\FooterFeatureModel;
use App\Models\TweetModel;

class ContactController extends BaseController
{
    public function index($trial_name = null)
    {
        // client
        $client_model = new ClientModel();
        $client = $client_model->where("domain_live_url", base_url())->where('status', 1)->get()->getFirstRow();
        if ($client->is_production == 1) {
            $is_production = 1;
            $client_id = $client->id;
        } else {
            $is_production = 0;
            if ($trial_name != null) {
                $trial_access_name = $trial_name;
            } else {
                $trial_access_name = null;
            }
            $client = $client_model->where("domain_live_url", base_url())->where('trial_access_name', $trial_access_name)->where('status', 1)->get()->getFirstRow();
            if ($client) {
                $client_id = $client->id;
            }else{
                return redirect()->to(base_url('/'));
            }
        }
        // define trial or prod
        $data['trial_name'] = $trial_name;
        $data['is_production'] = $is_production;  
        // config
        $config = new ConfigModel();
        $data['config']   = $config->where('client_id', $client_id)->where('status', 1)->get()->getFirstRow();
        // config menu
        $config_menu = new ConfigMenuModel();
        $data['config_menu'] = $config_menu->where('client_id', $client_id)->where('status', 1)->get()->getFirstRow();
        // department
        $department = new DepartmentModel();
        $data['departments'] = $department->where('client_id', $client_id)->where('status', 1)->get()->getResult();
        // footer feature
        $footer_feature = new FooterFeatureModel();
        $data['footer_features'] = $footer_feature->where('client_id', $client_id)->where('status', 1)->get()->getResult();
        // blog & blog categories
        $db = \Config\Database::connect();
        $data['blogs'] = $db->query("
            SELECT 
                clinic001_blog.*,
                clinic001_blog_category.name as category_name
            FROM clinic001_blog JOIN clinic001_blog_category
            ON clinic001_blog.blog_category_id = clinic001_blog_category.id
            WHERE clinic001_blog.client_id = '$client_id'
            AND clinic001_blog_category.client_id = '$client_id'
            AND clinic001_blog.status != 0
            AND clinic001_blog_category.status != 0
        ")->getResult();
        // tweets
        $tweet = new TweetModel();
        $data['tweets'] = $tweet->where('client_id', $client_id)->where('status', 1)->get()->getResult();

        return view('frontend/contact/index', $data);
    }
}
