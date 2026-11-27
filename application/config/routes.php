
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Default Controller
|--------------------------------------------------------------------------
| Halaman pertama aplikasi langsung membuka Login
*/

$route['default_controller'] = 'auth';

/*
|--------------------------------------------------------------------------
| Custom Routes
|--------------------------------------------------------------------------
*/

$route['auth'] = 'auth/index';
$route['auth/login'] = 'auth/login';
$route['auth/logout'] = 'auth/logout';

$route['dashboard'] = 'dashboard/index';

$route['mahasiswa'] = 'mahasiswa/index';
$route['profil'] = 'profil/index';

/*
|--------------------------------------------------------------------------
| 404 Override
|--------------------------------------------------------------------------
*/

$route['404_override'] = '';

/*
|--------------------------------------------------------------------------
| Translate URI Dashes
|--------------------------------------------------------------------------
*/

$route['translate_uri_dashes'] = FALSE;
