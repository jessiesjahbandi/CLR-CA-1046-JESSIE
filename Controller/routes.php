<?php



route('', 'get' , 'AuthController::login');
route('login', 'post' , 'AuthController::login');

// route('register', 'get', function () {
//     view('register');
// });
route('register', 'get', 'AuthController::register');

route('register', 'post' , 'AuthController::register');

//show dashboard
route('dashboard','get' , 'dashboardController::index');

//create new contact
route('create','get' , 'dashboardController::create');
route('create','post' , 'dashboardController::create');

route('update','get' , 'dashboardController::update');
route('update','post' , 'dashboardController::update');

route('delete','get' , 'dashboardController::delete');

// route('dashboard', 'get', function () {
//     view('dashboard');
// });
// route('create', 'get', function () {
//     view('create');
// });

