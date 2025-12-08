<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');

$routes->get('/register', 'Auth::register');
$routes->post('/auth/registerProcess', 'Auth::registerProcess');
$routes->get('/login', 'Auth::login');

$routes->get('/kamera', 'KameraController::index');
$routes->get('/kategori/kat_kamera/(:any)', 'KameraController::kategori/$1');

$routes->get('/lighting', 'LightingController::index');
$routes->get('/kategori/kat_lighting/(:any)', 'LightingController::kategori/$1');

$routes->get('/modifier', 'ModifierController::index');
$routes->get('/kategori/kat_modifier/(:any)', 'ModifierController::kategori/$1');

$routes->get('/kat_lighting', 'Kategori::lighting');
$routes->get('/kat_modifier', 'Kategori::modifier');
$routes->get('/home', 'Kategori::kamera');

$routes->get('/koleksi', 'Koleksi::koleksi');

$routes->get('/search', 'SearchController::index');
