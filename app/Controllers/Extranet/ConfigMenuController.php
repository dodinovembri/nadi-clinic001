<?php

namespace App\Controllers\Extranet;
use App\Models\ConfigModel;
use App\Models\ConfigMenuModel;

class ConfigMenuController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        // menu config
        $config_menu = new ConfigMenuModel();
        $data['config_menu'] = $config_menu->get()->getFirstRow();

        return view('extranet/config_menu/index', $data);
    }
}
