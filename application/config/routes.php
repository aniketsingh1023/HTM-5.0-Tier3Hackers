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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['products'] = 'products/index';
$route['products/create'] = 'products/create';
$route['products/update/(:num)'] = 'products/update/$1';
$route['products/delete/(:num)'] = 'products/delete/$1';
$route['default_controller'] = 'user';
$route['home'] = 'user/home';
$route['products/details/(:num)'] = 'products/details/$1';
$route['reports/sales'] = 'reports/sales';
$route['company/register'] = 'company/register';
$route['collaboration'] = 'collaboration/index';
$route['collaboration/send_message'] = 'collaboration/send_message';
$route['collaboration/start_video_call'] = 'collaboration/start_video_call';
$route['chatbot'] = 'chatbot/chat_view';            // For displaying the chatbot view
$route['chatbot/send_message'] = 'chatbot/send_message';  // For handling message sending
$route['user/admin_dashboard'] = 'user/admin_dashboard';
$route['franchise_owner/dashboard'] = 'franchise_owner/dashboard';
$route['store_manager/dashboard'] = 'store_manager/dashboard';
$route['prediction'] = 'prediction/index';
$route['reviews'] = 'SentimentAnalysisController/index';
$route['salesreport'] = 'SalesReport/index';
$route['sales/monthly_sales'] = 'sales/monthly_sales';
$route['homebutton'] = 'HomeControllers/homebutton';










