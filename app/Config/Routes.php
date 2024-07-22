<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/stok', 'Home::stok');
$routes->get('/login', 'Home::login');
$routes->get('/register', 'Home::register');
