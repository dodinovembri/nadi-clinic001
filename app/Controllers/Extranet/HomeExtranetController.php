<?php

namespace App\Controllers\Extranet;

use App\Models\ClientModel;
use App\Models\ConfigModel;

class HomeExtranetController extends BaseController
{
    public function index($trial_name = null)
    {
        // client
        $client_model = new ClientModel();
        $client = $client_model->where("domain_live_url", base_url())->get()->getFirstRow();
        if ($client->is_production == 1) {
            $is_production = 1;
            $client_id = $client->id;
        } else {
            if ($trial_name != null) {
                $trial_access_name = $trial_name;
            } else {
                $trial_access_name = "default";
            }
            $client = $client_model->where("domain_live_url", base_url())->where('trial_access_name', $trial_access_name)->get()->getFirstRow();
            $client_id = $client->id;
            $is_production = 0;
        }
        // define trial or prod
        $data['trial_name'] = $trial_name;
        $data['is_production'] = $is_production;        
        // config
        $config_model = new ConfigModel();
        $data['config']   = $config_model->where('client_id', $client_id)->get()->getFirstRow();

        return view('extranet/home/index', $data);
    }
}
