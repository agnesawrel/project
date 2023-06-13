<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// // Load the system's routing first, so that the app and ENVIRONMENT
// // can override as needed
// if(file_exists(SYSTEMPATH . 'Config/Routes.php')){
//     require SYSTEMPATH . 'Config/Routes.php';
// }

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
// $routes->setAutoRoute(true);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.


/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');

// untuk menghubungkan page ke bagian index/ home
// 

// $routes->get('/todolist', 'Todolist::index');
// $routes->post('/todolist/addTask', 'Todolist::addTask');
// $routes->get('/todolist/markAsDone/(:num)', 'Todolist::markAsDone/$1');
// $routes->get('/todolist/deleteTask/(:num)', 'Todolist::deleteTask/$1');

// routes untuk praktek ktp
// $routes->get('ktp', 'Ktp::index');
// $routes->get('profil2', 'Ktm::index');

// // routes untuk praktek pesan terbaca
// $routes->get('data', 'PesanController::input');
// $routes->get('proses', 'PesanController::proses');

// // routes untuk praktek lulus
// $routes->get('input', 'PesanLulus::input');
// $routes->get('proses', 'PesanLulus::proses');

// routes untuk praktek menampilkan home
//use App\Controllers\Pages;

//$routes->get('pages', [Pages::class, 'index']);
//$routes->get('(:segment)', [Pages::class, 'view']);

// routes untuk praktek menambahkan database ke mvc (praktek bagian models)
use App\Controllers\News;
use App\Controllers\Pages;

$routes->match(['get', 'post'], 'news/create', [News::class, 'create']); // kalo kaya gini bisa pake method get atau post
$routes->get('news/(:segment)', [News::class, 'view']); // hanya memproses jika methodnya get
$routes->get('news', [News::class, 'index']);
$routes->get('pages', [Pages::class, 'index']);

$routes->get('login', 'Login::index');

// setiap membuat routes index, letakkan routes diatas routes segment dan diletakkan diatas use juga.
$routes->get('asisten', 'AsistenController::index');
// $routes->get('asisten', 'LoginAsController::index');




$routes->get('(:segment)', [Pages::class, 'view']);


// tugas platform, menampilkan asisten praktikum
use App\Controllers\AsistenController;
// use App\Controllers\LoginAsController;

$routes->match(
    ['get', 'post'],
    'asisten/simpan',
    [
        AsistenController::class,
        'simpan'
    ]
);
$routes->match(
    ['get', 'post'],
    'asisten/update',
    [
        AsistenController::class,
        'update'
    ]
);
$routes->match(
    ['get', 'post'],
    'asisten/delete',
    [
        AsistenController::class,
        'delete'
    ]
);

$routes->match(
    ['get', 'post'],
    'asisten/search',
    [
        AsistenController::class,
        'search'
    ]
);
$routes->get('/asisten/loginasisten', [AsistenController::class, 'home']);
$routes->match(
    ['get', 'post'],
    'asisten/home',
    [AsistenController::class, 'home']
);
$routes->match(
    ['get', 'post'],
    'asisten/checklogin',
    [AsistenController::class, 'checklogin']
);

$routes->match(
    ['get', 'post'],
    'asisten/logout',
    [AsistenController::class, 'logout']
);


// praktek login
// use App\Controllers\Login;

// $routes->get('login/home', [Login::class, 'home']);
// $routes->match(['get', 'post'], 'login/check', [Login::class, 'check']);
// $routes->get('login/logout', [Login::class, 'logout']);




// $routes->get('asisten/update/(:any)', [AsistenController::class, 'update/$1']);
// $routes->post('asisten/update', [AsistenController::class, 'processUpdate']);

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
