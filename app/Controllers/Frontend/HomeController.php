<?php

namespace App\Controllers\Frontend;

class Homecontroller extends BaseController
{
    public function index()
    {
        return view('frontend/home/index');
    }
}
