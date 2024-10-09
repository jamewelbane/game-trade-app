<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemListingController;
use App\Http\Controllers\AccountListingController;

Route::get('/dashboard', function () {
    return view('admin.app');
})->name('dashboard');

Route::get('/add-item', function () {
    return view('admin.pages.new_item_admin');
})->name('add-item');


Route::get('/mystore', function () {
    return view('admin.pages.mystore_admin');
});
 

Route::get('/', function () {
    return view('user.app');
});


Route::post('/account-listings', [AccountListingController::class, 'store'])->name('account_listings.store');
Route::resource('account_listings', AccountListingController::class);

Route::post('/item-listings', [ItemListingController::class, 'store'])->name('item_listings.store');
Route::resource('item_listings', ItemListingController::class);


