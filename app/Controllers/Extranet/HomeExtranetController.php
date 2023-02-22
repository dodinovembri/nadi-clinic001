<?php

namespace App\Controllers\Extranet;

use App\Models\ConfigModel;

class HomeExtranetController extends BaseController
{
    public function index()
    {
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();

        return view('extranet/home/index', $data);
    }
}
