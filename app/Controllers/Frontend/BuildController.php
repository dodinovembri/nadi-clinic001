<?php

namespace App\Controllers\Frontend;

class BuildController extends BaseController
{
    public function index($app_id, $prefix)
    {
        $db = \Config\Database::connect();
        $db->query("CREATE TABLE `clinic001_$prefix"."_about` AS SELECT * FROM `clinic001_about`");

        return redirect()->to(base_url('extranet'));
    }
}
