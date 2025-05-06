<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

// TESTING
$routes->get('/', 'TestController::index');
$routes->get('/admin', 'TestController::admin');
$routes->get('/super', 'TestController::super');
$routes->get('/login', 'TestController::login');
$routes->get('/signup', 'TestController::signup');


