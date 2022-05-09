<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\InventionDisclosureController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SettingValueController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

// Invention Disclosures
Route::resource('invention-disclosures', InventionDisclosureController::class)->only(['index', 'store', 'show', 'update', 'delete']);
Route::name('invention-disclosures.')->prefix('invention-disclosures')->group(function(){
});

// Contacts
Route::resource('contacts', ContactController::class)->only(['index', 'store', 'show', 'update', 'delete']);
Route::name('contacts.')->prefix('contacts')->group(function(){
});

// Settings Route
Route::resource('settings', SettingController::class)->only(['index', 'store', 'show', 'update']);
Route::name('settings.')->prefix('settings')->group(function(){
});

//  Values Routes
Route::name('values.')->prefix('values')->group(function(){
    Route::get('/{settingValue}', [ SettingValueController::class, 'show' ])->name('show');
    Route::patch('/{settingValue}', [ SettingValueController::class, 'update' ])->name('update');
    Route::post('/{setting}', [ SettingValueController::class, 'store' ])->name('store');
    Route::delete('/{settingValue}', [ SettingValueController::class, 'destroy' ])->name('destroy');
});
