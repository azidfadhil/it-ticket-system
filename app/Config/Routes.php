<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('admin', function($routes) {
  $routes->match(['GET', 'POST'], '/', 'admin\C_dashboard::index');
  $routes->match(['GET', 'POST'], 'beranda', 'admin\C_dashboard::beranda');
  $routes->match(['GET', 'POST'], 'serverside/(:segment)', 'admin\C_dashboard::$1');

  $routes->group('users', function($routes) {
    $routes->match(['GET', 'POST'], '/', 'admin\C_users::index');
    $routes->match(['GET', 'POST'], '(:segment)', 'admin\C_users::$1');
  });
});
