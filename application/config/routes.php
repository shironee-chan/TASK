<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Frontend_Controller';

$route['admin'] = 'Admin_Controller';
$route['dashboard'] = 'Admin_Controller/dashboard';
$route['register'] = 'Admin_Controller/register';
$route['logout'] = 'Admin_Controller/logout';
$route['dashboard/add-resident'] = 'Admin_Controller/add_resident';
$route['dashboard/view-residents'] = 'Admin_Controller/view_resident';
$route['dashboard/update-resident/(:num)'] = 'Admin_Controller/update_resident/$1';
$route['dashboard/delete-resident/(:num)'] = 'Admin_Controller/delete_resident/$1';
$route['dashboard/add-complains'] = 'Admin_Controller/add_complains';
$route['dashboard/view-complains'] = 'Admin_Controller/view_complains';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
?>