<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';

$route['how-it-works']='site/how_it_work';
$route['design']='site/design';
$route['blog']='site/blog';
$route['support']='site/support';
$route['jobs']='site/job';
$route['shop']='site/shop';
$route['login']='site/login';

$route['business']='site/business';
$route['kickstarter']='site/kickstarter';
$route['press']='site/press';
$route['privacy-policy']='site/privacy_policy';
$route['terms-of-use']='site/terms_of_use';
$route['returns-and-refunds']='site/refund';
$route['contact']='site/contact';
$route['reviews']='site/review';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*admin*/
$route['admin'] = 'admin/user/index';
$route['admin/signup'] = 'admin/user/signup';
$route['admin/create_member'] = 'admin/user/create_member';
$route['admin/login'] = 'admin/user/index';
$route['admin/logout'] = 'admin/user/logout';
$route['admin/login/validate_credentials'] = 'admin/user/validate_credentials';

$route['admin/products'] = 'admin/admin_products/index';
$route['admin/products/add'] = '/admin/admin_products/add';
$route['admin/products/update'] = 'admin/admin_products/update';
$route['admin/products/update/(:any)'] = 'admin/admin_products/update/$1';
$route['admin/products/delete/(:any)'] = 'admin/admin_products/delete/$1';
$route['admin/products/(:any)'] = 'admin/admin_products/index/$1'; //$1 = page number

$route['shop']='site/shop';
$route['shop/customize/(:any)']='site/shop/customize/$1';