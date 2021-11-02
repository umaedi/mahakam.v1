<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/biografi', 'Biografi::bupati');
$routes->get('/agenda', 'Agenda::index');
$routes->get('/auth/login', 'Auth::index');
$routes->get('/administrator', 'Administrator::index', ['filter' => 'auth']);
$routes->delete('/administrator/(:num)', 'Administrator::delete_agenda/$1');
$routes->delete('/administrator/dokumen/(:num)', 'Administrator::delete_dokumen/$1');
$routes->get('/administrator/bupati/edit_bupati/(:num)', 'Administrator::edit_bupati/$1', ['filter' => 'auth']);
$routes->get('/administrator/wakil_bupati', 'Administrator::wakil_bupati');
$routes->get('/administrator/wakil/edit_wakil/(:num)', 'Administrator::edit_wakil/$1');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
