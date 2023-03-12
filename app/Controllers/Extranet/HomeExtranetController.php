<?php

namespace App\Controllers\Extranet;

use App\Models\ConfigModel;

class HomeExtranetController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();

        return view('extranet/home/index', $data);
    }
}
