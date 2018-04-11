<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['posts/update']='posts/update';
$route['posts/edit']='posts/edit';
$route['posts/create']='posts/create';
$route['posts/(:any)']="posts/view/$1";

$route['posts']='posts/index';
$route['default_controller'] = 'pages/view';

$route['category/posts/(:any)']='category/posts/$1';
$route['category']='category/index';
$route['category/create']='category/create';

$route['(:any)']="pages/view/$1";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
