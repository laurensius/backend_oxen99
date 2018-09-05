<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['result/(:any)'] = 'site/detail/$1'; 
$route['sitemap\.xml'] = 'site/sitemap'; 
$route['default_controller'] = 'site';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;