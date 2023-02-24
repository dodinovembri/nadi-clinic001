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
$routes->get('blog', [\App\Controllers\Frontend\BlogController::class, 'index']);
$routes->get('about', [\App\Controllers\Frontend\AboutController::class, 'index']);
$routes->get('doctor', [\App\Controllers\Frontend\DoctorController::class, 'index']);
$routes->get('medical-care', [\App\Controllers\Frontend\MedicalCareController::class, 'index']);
$routes->get('department/show/(:any)', [\App\Controllers\Frontend\DepartmentController::class, 'index']);
$routes->get('timetable', [\App\Controllers\Frontend\TimetableController::class, 'index']);
$routes->get('gallery', [\App\Controllers\Frontend\GalleryController::class, 'index']);
$routes->get('contact', [\App\Controllers\Frontend\ContactController::class, 'index']);

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

	$routes->group('about', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\AboutController::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\AboutController::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\AboutController::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\AboutController::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\AboutController::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\AboutController::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\AboutController::class, 'destroy']);
    });	

	$routes->group('blog', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\BlogController::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\BlogController::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\BlogController::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\BlogController::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\BlogController::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\BlogController::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\BlogController::class, 'destroy']);
    });	

	$routes->group('contact', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\ContactController::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\ContactController::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\ContactController::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\ContactController::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\ContactController::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\ContactController::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\ContactController::class, 'destroy']);
    });		

	$routes->group('department', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\DepartmentController::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\DepartmentController::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\DepartmentController::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\DepartmentController::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\DepartmentController::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\DepartmentController::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\DepartmentController::class, 'destroy']);
    });	
	
	$routes->group('gallery', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\GalleryController::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\GalleryController::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\GalleryController::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\GalleryController::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\GalleryController::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\GalleryController::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\GalleryController::class, 'destroy']);
    });		

	$routes->group('timetable', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\TimetableController::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\TimetableController::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\TimetableController::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\TimetableController::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\TimetableController::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\TimetableController::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\TimetableController::class, 'destroy']);
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
