<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Shop extends BaseController
{
    public function index()
    {
        $data['title'] = "Admin shop page";
        return view('admin/shop', $data);
    }

    public function hello()
    {
        echo "Hello from admin controller product method";
    }
}
