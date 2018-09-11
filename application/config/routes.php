<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['copyright\.html'] = 'site/copyright/';
$route['privacy-policy\.html'] = 'site/privacy_policy/';
$route['terms-and-conditions\.html'] = 'site/toc/';
$route['contact-us\.html'] = 'site/contact_us/';
$route['result/(:any)'] = 'site/detail/$1'; 
$route['sitemap\.xml'] = 'site/sitemap'; 
$route['default_controller'] = 'site';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;