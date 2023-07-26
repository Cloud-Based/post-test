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
$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// others route
$route['login'] = 'LoginController';
$route['logout'] = 'LoginController/logoutAct';
$route['admin'] = 'admin/admincontroller';
$route['author'] = 'author/authorcontroller';

$route['home/show/(\d+)'] = function ($id)
{
        return 'homecontroller/show' . '/' . $id;
};

// route admin post
$route['admin/post'] = 'admin/post/postcontroller';
$route['admin/post/create'] = 'admin/post/postcontroller/create';

$route['admin/post/show/(\d+)'] = function ($id)
{
        return 'admin/post/postcontroller/show' . '/' . $id;
};

$route['admin/post/update/(\d+)'] = function ($id)
{
        return 'admin/post/postcontroller/update' . '/' . $id;
};

$route['admin/post/delete/(\d+)'] = function ($id)
{
        return 'admin/post/postcontroller/delete' . '/' . $id;
};

// route admin account
$route['admin/account'] = 'admin/account/accountcontroller';
$route['admin/account/create'] = 'admin/account/accountcontroller/create';

$route['admin/account/show/(:any)'] = function ($username)
{
        return 'admin/account/accountcontroller/show' . '/' . $username;
};

$route['admin/account/update/(:any)'] = function ($username)
{
        return 'admin/account/accountcontroller/update' . '/' . $username;
};

$route['admin/account/delete/(:any)'] = function ($username)
{
        return 'admin/account/accountcontroller/delete' . '/' . $username;
};

// route author post
$route['author/post'] = 'author/post/postcontroller';
$route['author/post/create'] = 'author/post/postcontroller/create';

$route['author/post/show/(\d+)'] = function ($id)
{
        return 'author/post/postcontroller/show' . '/' . $id;
};

$route['author/post/update/(\d+)'] = function ($id)
{
        return 'author/post/postcontroller/update' . '/' . $id;
};

$route['author/post/delete/(\d+)'] = function ($id)
{
        return 'author/post/postcontroller/delete' . '/' . $id;
};