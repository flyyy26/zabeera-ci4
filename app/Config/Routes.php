<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/product', 'Home::product');
$routes->get('/faq', 'Home::faq');
$routes->get('/banners', 'BannerController::index');