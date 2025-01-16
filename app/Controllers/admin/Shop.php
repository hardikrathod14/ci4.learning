<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use APP\Controllers\Shop as ClientShop;

class Shop extends BaseController
{
    public function index()
    {
        $data['title'] = "Admin shop page";
        return view('admin/shop', $data);
    }

    public function product($name, $brand = '')
    {
        echo "Name: $name <br>";
        echo "Brand: $brand";
    }
}
