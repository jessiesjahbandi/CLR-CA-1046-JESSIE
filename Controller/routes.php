<?php


route('/', 'get', function () {
    view('login');
});
route('register', 'get', function () {
    view('register');
});
route('dashboard', 'get', function () {
    view('dashboard');
});

