<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountListingController;

Route::get('/dashboard', function () {
    return view('admin.app');
});

Route::get('/add-item', function () {
    return view('admin.pages.new_item_admin');
});
 

Route::get('/', function () {
    return view('user.app');
});


Route::post('/account-listings', [AccountListingController::class, 'store'])->name('account_listings.store');
Route::resource('account_listings', AccountListingController::class);

