<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('/shop', 'Shop::index');
// $routes->get('/shop/product', 'Shop::product');

// Admin routes
// $routes->get('/admin/shop', 'Shop::product');

$routes->add('/shop', 'Shop::index');
// $routes->add('admin/shop', 'Admin\Shop::index');
// $routes->add('admin/shop', 'Shop::index', ['namespace' => "Admin"]);

// Accessing routes with segments
$routes->add('admin/product/(:any)/(:any)', 'Admin\Shop::product/$1/$2');

// Routing group
$routes->group('admin', function ($routes) {
    $routes->get('blog', 'Admin\Blog::index');
    $routes->get('load_blogs', 'Admin\Blog::loadBlogs');
    $routes->post('blog/new', 'Admin\Blog::save');
});
