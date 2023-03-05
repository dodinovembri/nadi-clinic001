<?php

namespace App\Controllers\Frontend;

class BuildController extends BaseController
{
    public function index($prefix)
    {
        $db = \Config\Database::connect();
        $db->query("CREATE TABLE clinic001_.$prefix.about AS SELECT * FROM clinic001.about");

        return redirect()->to(base_url('extranet'));
    }
}
