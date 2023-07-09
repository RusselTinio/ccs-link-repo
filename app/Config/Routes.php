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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home');


$routes->group('',['filter' =>'AuthCheck'], function($routes){
    $routes->get('/Dash/Dash', 'Dash\Dash::index');
    $routes->get('Dash/Dash/profile', 'Dash\Dash::profile');
});

$routes->group('',['filter' =>'LogFilter'], function($routes){
    $routes->get('Login/Auth/','Login\Auth::index');
   $routes->get('Login/Auth/viewRegister','Login\Auth::viewRegister');    
});


//for admin filter
$routes->group('',['filter' =>'AdminCheckFilter'], function($routes){
    $routes->get('AdminController/Admin/adminView', 'AdminController\Admin::adminView');
    $routes->get('adminController/Admin/superAdminView', 'AdminController\Admin::superAdminView');
});

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
