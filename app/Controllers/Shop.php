<?php

namespace App\Controllers;

use App\Controllers\Admin\Shop as AdminShop;

class Shop extends BaseController
{
    public function index()
    {
        $data['title'] = "Shop for client";
        return view('customer/shop', $data);
    }

    public function product()
    {
        $helloObj = new AdminShop();
        // $helloObj->hello();
    }

    public function anotherHello()
    {
        echo "Another hello from shop client controller";
    }
}
