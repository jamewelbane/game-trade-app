<?php

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemListingController;
use App\Http\Controllers\AccountListingController;
use Illuminate\Contracts\Encryption\DecryptException;

Route::get('/dashboard', function () {
    return view('admin.app');
})->name('dashboard');

Route::get('/add-item', function () {
    return view('admin.pages.new_item_admin');
})->name('add-item');

Route::get('/new-listing-account', function () {
    return view('admin.pages.CreateAccountListing');
})->name('new-listing-account');

Route::get('/new-listing-item', function () {
    return view('admin.pages.CreateItemListing');
})->name('new-listing-item');


Route::get('/mystore', function () {
    
    return view('admin.pages.mystore_admin');
})->name('mystore-selection');


// Account list admin
Route::get('/mystore/{encryptedValue}', function ($encryptedValue) {
    try {
        // Decrypt the value
        $value = Crypt::decrypt($encryptedValue);

        // Check the decrypted value
        if ($value === 'accounts') {
            return view('admin.pages.mystore_accounts');
        }

    } catch (DecryptException $e) {
        // Handle the error gracefully
        return redirect()->route('mystore-selection')->with('error', 'Invalid account.');
    }
})->name('account-listing-table');
 

Route::get('/', function () {
    return view('user.app');
});


Route::post('/account-listings', [AccountListingController::class, 'store'])->name('account_listings.store');
Route::resource('account_listings', AccountListingController::class);

Route::post('/item-listings', [ItemListingController::class, 'store'])->name('item_listings.store');
Route::resource('item_listings', ItemListingController::class);


