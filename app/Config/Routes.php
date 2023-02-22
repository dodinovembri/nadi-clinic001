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
$routes->get('/', [\App\Controllers\Frontend\HomeController::class, 'index']);

// Routes Extranet Website
$routes->get('ext-login', [\App\Controllers\Extranet\Authcontroller::class, 'login']);
$routes->post('ext-auth', [\App\Controllers\Extranet\Authcontroller::class, 'auth']);
$routes->get('ext-logout', [\App\Controllers\Extranet\Authcontroller::class, 'logout']);
$routes->group('extranet', ['filter' => 'auth'], function($routes){
	$routes->get('/', [\App\Controllers\Extranet\HomeExtranetController::class, 'index']);

	$routes->group('config', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\ConfigController::class, 'index']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\ConfigController::class, 'update']);
    });	

	$routes->group('prospective-customer', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\ProspectiveCustomerController::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\ProspectiveCustomerController::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\ProspectiveCustomerController::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\ProspectiveCustomerController::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\ProspectiveCustomerController::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\ProspectiveCustomerController::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\ProspectiveCustomerController::class, 'destroy']);
    });	
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
