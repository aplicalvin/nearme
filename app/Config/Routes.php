<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

// TESTING
$routes->get('/', 'TestController::index');
$routes->get('/admin', 'TestController::admin');


