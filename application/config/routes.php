<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['index'] = 'Welcome/index';
$route['admin'] = 'Welcome/admin';
$route['logins'] = 'Welcome/login';
$route['logout'] = 'Welcome/logout';
$route['download_details'] = 'Welcome/download_details';
$route['admin_dow_list'] = 'Welcome/admin_dow_list';
$route['admin_types'] = 'Welcome/admin_types';
$route['contact'] = 'Welcome/contact';
$route['admin_contact'] = 'Welcome/admin_contact';
$route['admin_profile'] = 'Welcome/admin_profile';
$route['insert_download'] = 'Welcome/insert_download';
$route['update_download'] = 'Welcome/update_download';
$route['delete_download'] = 'Welcome/delete_download';
$route['add_file_types'] = 'Welcome/add_file_types';
$route['add_file_sizes'] = 'Welcome/add_file_sizes';
$route['add_types'] = 'Welcome/add_types';
$route['up_file_types'] = 'Welcome/up_file_types';
$route['up_file_sizes'] = 'Welcome/up_file_sizes';
$route['up_types'] = 'Welcome/up_types';
$route['up_profile'] = 'Welcome/up_profile';
$route['search'] = 'Welcome/search';
$route['searching'] = 'Welcome/searching';
$route['delete_file_types'] = 'Welcome/delete_file_types';
$route['delete_file_sizes'] = 'Welcome/delete_file_sizes';
$route['how_to_fix_link'] = 'Welcome/how_to_fix_link';
$route['report_dead_link'] = 'Welcome/report_dead_link';
$route['delete_types'] = 'Welcome/delete_types';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
