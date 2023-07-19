<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
// $routes->get('/profile', 'FormController::profile');
// $routes->get('/experience', 'FormController::experience');
// $routes->group('admin/mahasiswa', ['namespace' => 'App\Controllers\Admin'], function($routes) {
//     $routes->get('/', 'Mahasiswa::index', ['as' => 'admin.mahasiswa.index']);
//     $routes->get('create', 'Mahasiswa::create', ['as' => 'admin.mahasiswa.create']);
//     $routes->post('store', 'Mahasiswa::store', ['as' => 'admin.mahasiswa.store']);
//     $routes->get('edit/(:num)', 'Mahasiswa::edit/$1', ['as' => 'admin.mahasiswa.edit']);
//     $routes->post('update/(:num)', 'Mahasiswa::update/$1', ['as' => 'admin.mahasiswa.update']);
//     $routes->get('delete/(:num)', 'Mahasiswa::delete/$1', ['as' => 'admin.mahasiswa.delete']);
// });

// $routes->group('admin/dosen', ['namespace' => 'App\Controllers\Admin'], function($routes) {
//     $routes->get('/', 'Dosen::index', ['as' => 'admin.dosen.index']);
//     $routes->get('create', 'Dosen::create', ['as' => 'admin.dosen.create']);
//     $routes->post('store', 'Dosen::store', ['as' => 'admin.dosen.store']);
//     $routes->get('edit/(:num)', 'Dosen::edit/$1', ['as' => 'admin.dosen.edit']);
//     $routes->post('update/(:num)', 'Dosen::update/$1', ['as' => 'admin.dosen.update']);
//     $routes->get('delete/(:num)', 'Dosen::delete/$1', ['as' => 'admin.dosen.delete']);
// });
$routes->get('/mahasiswa', 'Admin::mahasiswa');
$routes->get('/dosen', 'Admin::dosen');

$routes->get('/createMahasiswa', 'Admin::createMahasiswa');
$routes->post('/storeMahasiswa', 'Admin::storeMahasiswa');
$routes->get('/editMahasiswa/(:num)', 'Admin::editMahasiswa/$1');
$routes->post('/updateMahasiswa/(:num)', 'Admin::updateMahasiswa/$1');
$routes->get('/deleteMahasiswa/(:num)', 'Admin::deleteMahasiswa/$1');

$routes->get('/createDosen', 'Admin::createDosen');
$routes->post('/storeDosen', 'Admin::storeDosen');
$routes->get('/editDosen/(:num)', 'Admin::editDosen/$1');
$routes->post('/updateDosen/(:num)', 'Admin::updateDosen/$1');
$routes->get('/deleteDosen/(:num)', 'Admin::deleteDosen/$1');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
