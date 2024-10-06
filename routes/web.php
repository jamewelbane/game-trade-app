<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('admin.app');
});

Route::get('/add-item', function () {
    return view('admin.pages.new_item_admin');
});
 

Route::get('/', function () {
    return view('user.app');
});
