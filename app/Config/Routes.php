<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

// TESTING
$routes->get('/', 'TestController::landing'); // landing pages
$routes->get('/admin', 'TestController::admin');
$routes->get('/super', 'TestController::super');
$routes->get('/login', 'TestController::login');
$routes->get('/signup', 'TestController::signup');
$routes->get('/hotels/1', 'TestController::hoteldetail');


