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
$routes->addPlaceholder('uuid', '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}');
$routes->get('build/(:uuid)/(:uuid)/(:any)', [\App\Controllers\Frontend\BuildController::class, 'index']);

// frontend routes
$routes->get('/', [\App\Controllers\Frontend\HomeController::class, 'index']);
$routes->get('blog', [\App\Controllers\Frontend\BlogController::class, 'index']);
$routes->get('blog/show/(:uuid)', [\App\Controllers\Frontend\BlogController::class, 'show']);
$routes->get('about', [\App\Controllers\Frontend\AboutController::class, 'index']);
$routes->get('doctor', [\App\Controllers\Frontend\DoctorController::class, 'index']);
$routes->get('medical-care', [\App\Controllers\Frontend\MedicalCareController::class, 'index']);
$routes->get('department', [\App\Controllers\Frontend\DepartmentController::class, 'index']);
$routes->get('department/show/(:uuid)', [\App\Controllers\Frontend\DepartmentController::class, 'show']);
$routes->get('timetable', [\App\Controllers\Frontend\TimetableController::class, 'index']);
$routes->get('timetable/department/show/(:uuid)', [\App\Controllers\Frontend\TimetableController::class, 'show']);
$routes->get('gallery', [\App\Controllers\Frontend\GalleryController::class, 'index']);
$routes->get('contact', [\App\Controllers\Frontend\ContactController::class, 'index']);

// extranet routes
$routes->get('ext-login', [\App\Controllers\Extranet\AuthController::class, 'login']);
$routes->post('ext-auth', [\App\Controllers\Extranet\AuthController::class, 'auth']);
$routes->get('ext-logout', [\App\Controllers\Extranet\AuthController::class, 'logout']);
$routes->group('extranet', ['filter' => 'auth'], function ($routes) {
	$routes->get('/', [\App\Controllers\Extranet\HomeExtranetController::class, 'index']);

	$routes->group('config', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\ConfigController::class, 'index']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\ConfigController::class, 'update']);
	});

	$routes->group('config-menu', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\ConfigMenuController::class, 'index']);
		$routes->post('update/(:uuid)', [\App\Controllers\Extranet\ConfigMenuController::class, 'update']);
	});

	$routes->group('slider', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\SliderController::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\SliderController::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\SliderController::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\SliderController::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\SliderController::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\SliderController::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\SliderController::class, 'destroy']);
	});

	$routes->group('slider-feature', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\SliderFeatureController::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\SliderFeatureController::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\SliderFeatureController::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\SliderFeatureController::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\SliderFeatureController::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\SliderFeatureController::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\SliderFeatureController::class, 'destroy']);
	});

	$routes->group('footer-feature', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\FooterFeatureController::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\FooterFeatureController::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\FooterFeatureController::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\FooterFeatureController::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\FooterFeatureController::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\FooterFeatureController::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\FooterFeatureController::class, 'destroy']);
	});

	$routes->group('laboratory-feature', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\LaboratoryFeatureController::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\LaboratoryFeatureController::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\LaboratoryFeatureController::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\LaboratoryFeatureController::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\LaboratoryFeatureController::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\LaboratoryFeatureController::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\LaboratoryFeatureController::class, 'destroy']);
	});

	$routes->group('testimonial', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\TestimonialController::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\TestimonialController::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\TestimonialController::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\TestimonialController::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\TestimonialController::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\TestimonialController::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\TestimonialController::class, 'destroy']);
	});

	$routes->group('tweet', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\TweetController::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\TweetController::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\TweetController::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\TweetController::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\TweetController::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\TweetController::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\TweetController::class, 'destroy']);
	});

	$routes->group('faq', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\FaqController::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\FaqController::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\FaqController::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\FaqController::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\FaqController::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\FaqController::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\FaqController::class, 'destroy']);
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

	$routes->group('user', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\UserController::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\UserController::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\UserController::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\UserController::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\UserController::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\UserController::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\UserController::class, 'destroy']);
	});

	$routes->group('team', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\TeamController::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\TeamController::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\TeamController::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\TeamController::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\TeamController::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\TeamController::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\TeamController::class, 'destroy']);
	});

	$routes->group('appointment-type', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\AppointmentTypeController::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\AppointmentTypeController::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\AppointmentTypeController::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\AppointmentTypeController::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\AppointmentTypeController::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\AppointmentTypeController::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\AppointmentTypeController::class, 'destroy']);
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

	$routes->group('clinic', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\ClinicController::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\ClinicController::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\ClinicController::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\ClinicController::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\ClinicController::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\ClinicController::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\ClinicController::class, 'destroy']);
	});

	$routes->group('benefit', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\BenefitController::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\BenefitController::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\BenefitController::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\BenefitController::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\BenefitController::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\BenefitController::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\BenefitController::class, 'destroy']);
	});

	$routes->group('medical-care', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\MedicalCareController::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\MedicalCareController::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\MedicalCareController::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\MedicalCareController::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\MedicalCareController::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\MedicalCareController::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\MedicalCareController::class, 'destroy']);
	});

	$routes->group('blog-category', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\BlogCategoryController::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\BlogCategoryController::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\BlogCategoryController::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\BlogCategoryController::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\BlogCategoryController::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\BlogCategoryController::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\BlogCategoryController::class, 'destroy']);
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

	$routes->group('appointment', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\AppointmentController::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\AppointmentController::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\AppointmentController::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\AppointmentController::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\AppointmentController::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\AppointmentController::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\AppointmentController::class, 'destroy']);
	});
});

// Trial routes
$routes->group('(:segment)', function ($routes) {
	$routes->get('/', [\App\Controllers\Frontend\HomeController::class, 'index']);
	$routes->get('blog', [\App\Controllers\Frontend\BlogController::class, 'index']);
	$routes->get('blog/show/(:uuid)', [\App\Controllers\Frontend\BlogController::class, 'show']);
	$routes->get('about', [\App\Controllers\Frontend\AboutController::class, 'index']);
	$routes->get('doctor', [\App\Controllers\Frontend\DoctorController::class, 'index']);
	$routes->get('medical-care', [\App\Controllers\Frontend\MedicalCareController::class, 'index']);
	$routes->get('department', [\App\Controllers\Frontend\DepartmentController::class, 'index']);
	$routes->get('department/show/(:uuid)', [\App\Controllers\Frontend\DepartmentController::class, 'show']);
	$routes->get('timetable', [\App\Controllers\Frontend\TimetableController::class, 'index']);
	$routes->get('timetable/department/show/(:uuid)', [\App\Controllers\Frontend\TimetableController::class, 'show']);
	$routes->get('gallery', [\App\Controllers\Frontend\GalleryController::class, 'index']);
	$routes->get('contact', [\App\Controllers\Frontend\ContactController::class, 'index']);

	// extranet routes
	$routes->get('ext-login', [\App\Controllers\Extranet\AuthController::class, 'login']);
	$routes->post('ext-auth', [\App\Controllers\Extranet\AuthController::class, 'auth']);
	$routes->get('ext-logout', [\App\Controllers\Extranet\AuthController::class, 'logout']);
	$routes->group('extranet', ['filter' => 'auth'], function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\HomeExtranetController::class, 'index']);

		$routes->group('config', function ($routes) {
			$routes->get('/', [\App\Controllers\Extranet\ConfigController::class, 'index']);
			$routes->post('update/(:any)', [\App\Controllers\Extranet\ConfigController::class, 'update']);
		});

		$routes->group('config-menu', function ($routes) {
			$routes->get('/', [\App\Controllers\Extranet\ConfigMenuController::class, 'index']);
			$routes->post('update/(:uuid)', [\App\Controllers\Extranet\ConfigMenuController::class, 'update']);
		});

		$routes->group('slider', function ($routes) {
			$routes->get('/', [\App\Controllers\Extranet\SliderController::class, 'index']);
			$routes->get('create', [\App\Controllers\Extranet\SliderController::class, 'create']);
			$routes->post('store', [\App\Controllers\Extranet\SliderController::class, 'store']);
			$routes->get('show/(:any)', [\App\Controllers\Extranet\SliderController::class, 'show']);
			$routes->get('edit/(:any)', [\App\Controllers\Extranet\SliderController::class, 'edit']);
			$routes->post('update/(:any)', [\App\Controllers\Extranet\SliderController::class, 'update']);
			$routes->get('destroy/(:any)', [\App\Controllers\Extranet\SliderController::class, 'destroy']);
		});

		$routes->group('slider-feature', function ($routes) {
			$routes->get('/', [\App\Controllers\Extranet\SliderFeatureController::class, 'index']);
			$routes->get('create', [\App\Controllers\Extranet\SliderFeatureController::class, 'create']);
			$routes->post('store', [\App\Controllers\Extranet\SliderFeatureController::class, 'store']);
			$routes->get('show/(:any)', [\App\Controllers\Extranet\SliderFeatureController::class, 'show']);
			$routes->get('edit/(:any)', [\App\Controllers\Extranet\SliderFeatureController::class, 'edit']);
			$routes->post('update/(:any)', [\App\Controllers\Extranet\SliderFeatureController::class, 'update']);
			$routes->get('destroy/(:any)', [\App\Controllers\Extranet\SliderFeatureController::class, 'destroy']);
		});

		$routes->group('footer-feature', function ($routes) {
			$routes->get('/', [\App\Controllers\Extranet\FooterFeatureController::class, 'index']);
			$routes->get('create', [\App\Controllers\Extranet\FooterFeatureController::class, 'create']);
			$routes->post('store', [\App\Controllers\Extranet\FooterFeatureController::class, 'store']);
			$routes->get('show/(:any)', [\App\Controllers\Extranet\FooterFeatureController::class, 'show']);
			$routes->get('edit/(:any)', [\App\Controllers\Extranet\FooterFeatureController::class, 'edit']);
			$routes->post('update/(:any)', [\App\Controllers\Extranet\FooterFeatureController::class, 'update']);
			$routes->get('destroy/(:any)', [\App\Controllers\Extranet\FooterFeatureController::class, 'destroy']);
		});

		$routes->group('laboratory-feature', function ($routes) {
			$routes->get('/', [\App\Controllers\Extranet\LaboratoryFeatureController::class, 'index']);
			$routes->get('create', [\App\Controllers\Extranet\LaboratoryFeatureController::class, 'create']);
			$routes->post('store', [\App\Controllers\Extranet\LaboratoryFeatureController::class, 'store']);
			$routes->get('show/(:any)', [\App\Controllers\Extranet\LaboratoryFeatureController::class, 'show']);
			$routes->get('edit/(:any)', [\App\Controllers\Extranet\LaboratoryFeatureController::class, 'edit']);
			$routes->post('update/(:any)', [\App\Controllers\Extranet\LaboratoryFeatureController::class, 'update']);
			$routes->get('destroy/(:any)', [\App\Controllers\Extranet\LaboratoryFeatureController::class, 'destroy']);
		});

		$routes->group('testimonial', function ($routes) {
			$routes->get('/', [\App\Controllers\Extranet\TestimonialController::class, 'index']);
			$routes->get('create', [\App\Controllers\Extranet\TestimonialController::class, 'create']);
			$routes->post('store', [\App\Controllers\Extranet\TestimonialController::class, 'store']);
			$routes->get('show/(:any)', [\App\Controllers\Extranet\TestimonialController::class, 'show']);
			$routes->get('edit/(:any)', [\App\Controllers\Extranet\TestimonialController::class, 'edit']);
			$routes->post('update/(:any)', [\App\Controllers\Extranet\TestimonialController::class, 'update']);
			$routes->get('destroy/(:any)', [\App\Controllers\Extranet\TestimonialController::class, 'destroy']);
		});

		$routes->group('tweet', function ($routes) {
			$routes->get('/', [\App\Controllers\Extranet\TweetController::class, 'index']);
			$routes->get('create', [\App\Controllers\Extranet\TweetController::class, 'create']);
			$routes->post('store', [\App\Controllers\Extranet\TweetController::class, 'store']);
			$routes->get('show/(:any)', [\App\Controllers\Extranet\TweetController::class, 'show']);
			$routes->get('edit/(:any)', [\App\Controllers\Extranet\TweetController::class, 'edit']);
			$routes->post('update/(:any)', [\App\Controllers\Extranet\TweetController::class, 'update']);
			$routes->get('destroy/(:any)', [\App\Controllers\Extranet\TweetController::class, 'destroy']);
		});

		$routes->group('faq', function ($routes) {
			$routes->get('/', [\App\Controllers\Extranet\FaqController::class, 'index']);
			$routes->get('create', [\App\Controllers\Extranet\FaqController::class, 'create']);
			$routes->post('store', [\App\Controllers\Extranet\FaqController::class, 'store']);
			$routes->get('show/(:any)', [\App\Controllers\Extranet\FaqController::class, 'show']);
			$routes->get('edit/(:any)', [\App\Controllers\Extranet\FaqController::class, 'edit']);
			$routes->post('update/(:any)', [\App\Controllers\Extranet\FaqController::class, 'update']);
			$routes->get('destroy/(:any)', [\App\Controllers\Extranet\FaqController::class, 'destroy']);
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

		$routes->group('user', function ($routes) {
			$routes->get('/', [\App\Controllers\Extranet\UserController::class, 'index']);
			$routes->get('create', [\App\Controllers\Extranet\UserController::class, 'create']);
			$routes->post('store', [\App\Controllers\Extranet\UserController::class, 'store']);
			$routes->get('show/(:any)', [\App\Controllers\Extranet\UserController::class, 'show']);
			$routes->get('edit/(:any)', [\App\Controllers\Extranet\UserController::class, 'edit']);
			$routes->post('update/(:any)', [\App\Controllers\Extranet\UserController::class, 'update']);
			$routes->get('destroy/(:any)', [\App\Controllers\Extranet\UserController::class, 'destroy']);
		});

		$routes->group('team', function ($routes) {
			$routes->get('/', [\App\Controllers\Extranet\TeamController::class, 'index']);
			$routes->get('create', [\App\Controllers\Extranet\TeamController::class, 'create']);
			$routes->post('store', [\App\Controllers\Extranet\TeamController::class, 'store']);
			$routes->get('show/(:any)', [\App\Controllers\Extranet\TeamController::class, 'show']);
			$routes->get('edit/(:any)', [\App\Controllers\Extranet\TeamController::class, 'edit']);
			$routes->post('update/(:any)', [\App\Controllers\Extranet\TeamController::class, 'update']);
			$routes->get('destroy/(:any)', [\App\Controllers\Extranet\TeamController::class, 'destroy']);
		});

		$routes->group('appointment-type', function ($routes) {
			$routes->get('/', [\App\Controllers\Extranet\AppointmentTypeController::class, 'index']);
			$routes->get('create', [\App\Controllers\Extranet\AppointmentTypeController::class, 'create']);
			$routes->post('store', [\App\Controllers\Extranet\AppointmentTypeController::class, 'store']);
			$routes->get('show/(:any)', [\App\Controllers\Extranet\AppointmentTypeController::class, 'show']);
			$routes->get('edit/(:any)', [\App\Controllers\Extranet\AppointmentTypeController::class, 'edit']);
			$routes->post('update/(:any)', [\App\Controllers\Extranet\AppointmentTypeController::class, 'update']);
			$routes->get('destroy/(:any)', [\App\Controllers\Extranet\AppointmentTypeController::class, 'destroy']);
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

		$routes->group('clinic', function ($routes) {
			$routes->get('/', [\App\Controllers\Extranet\ClinicController::class, 'index']);
			$routes->get('create', [\App\Controllers\Extranet\ClinicController::class, 'create']);
			$routes->post('store', [\App\Controllers\Extranet\ClinicController::class, 'store']);
			$routes->get('show/(:any)', [\App\Controllers\Extranet\ClinicController::class, 'show']);
			$routes->get('edit/(:any)', [\App\Controllers\Extranet\ClinicController::class, 'edit']);
			$routes->post('update/(:any)', [\App\Controllers\Extranet\ClinicController::class, 'update']);
			$routes->get('destroy/(:any)', [\App\Controllers\Extranet\ClinicController::class, 'destroy']);
		});

		$routes->group('benefit', function ($routes) {
			$routes->get('/', [\App\Controllers\Extranet\BenefitController::class, 'index']);
			$routes->get('create', [\App\Controllers\Extranet\BenefitController::class, 'create']);
			$routes->post('store', [\App\Controllers\Extranet\BenefitController::class, 'store']);
			$routes->get('show/(:any)', [\App\Controllers\Extranet\BenefitController::class, 'show']);
			$routes->get('edit/(:any)', [\App\Controllers\Extranet\BenefitController::class, 'edit']);
			$routes->post('update/(:any)', [\App\Controllers\Extranet\BenefitController::class, 'update']);
			$routes->get('destroy/(:any)', [\App\Controllers\Extranet\BenefitController::class, 'destroy']);
		});

		$routes->group('medical-care', function ($routes) {
			$routes->get('/', [\App\Controllers\Extranet\MedicalCareController::class, 'index']);
			$routes->get('create', [\App\Controllers\Extranet\MedicalCareController::class, 'create']);
			$routes->post('store', [\App\Controllers\Extranet\MedicalCareController::class, 'store']);
			$routes->get('show/(:any)', [\App\Controllers\Extranet\MedicalCareController::class, 'show']);
			$routes->get('edit/(:any)', [\App\Controllers\Extranet\MedicalCareController::class, 'edit']);
			$routes->post('update/(:any)', [\App\Controllers\Extranet\MedicalCareController::class, 'update']);
			$routes->get('destroy/(:any)', [\App\Controllers\Extranet\MedicalCareController::class, 'destroy']);
		});

		$routes->group('blog-category', function ($routes) {
			$routes->get('/', [\App\Controllers\Extranet\BlogCategoryController::class, 'index']);
			$routes->get('create', [\App\Controllers\Extranet\BlogCategoryController::class, 'create']);
			$routes->post('store', [\App\Controllers\Extranet\BlogCategoryController::class, 'store']);
			$routes->get('show/(:any)', [\App\Controllers\Extranet\BlogCategoryController::class, 'show']);
			$routes->get('edit/(:any)', [\App\Controllers\Extranet\BlogCategoryController::class, 'edit']);
			$routes->post('update/(:any)', [\App\Controllers\Extranet\BlogCategoryController::class, 'update']);
			$routes->get('destroy/(:any)', [\App\Controllers\Extranet\BlogCategoryController::class, 'destroy']);
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

		$routes->group('appointment', function ($routes) {
			$routes->get('/', [\App\Controllers\Extranet\AppointmentController::class, 'index']);
			$routes->get('create', [\App\Controllers\Extranet\AppointmentController::class, 'create']);
			$routes->post('store', [\App\Controllers\Extranet\AppointmentController::class, 'store']);
			$routes->get('show/(:any)', [\App\Controllers\Extranet\AppointmentController::class, 'show']);
			$routes->get('edit/(:any)', [\App\Controllers\Extranet\AppointmentController::class, 'edit']);
			$routes->post('update/(:any)', [\App\Controllers\Extranet\AppointmentController::class, 'update']);
			$routes->get('destroy/(:any)', [\App\Controllers\Extranet\AppointmentController::class, 'destroy']);
		});
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
