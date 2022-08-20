<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\PincodeController;
Use App\Http\Controllers\SitemapController;

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
//Route::get('/api', [PincodeController::class, 'API'])->name('API');
Route::get('/find-pincode/{slug}', [PincodeController::class, 'FindPincode'])->name('find-pincode');

 Route::get('sitemap.xml',[SitemapController::class, 'index']);
// Route::get('sitemap1.xml',[SitemapController::class, 'Sitemap1']);
// Route::get('sitemap2.xml',[SitemapController::class, 'Sitemap2']);
// Route::get('sitemap3.xml',[SitemapController::class, 'Sitemap3']);

Route::get('easy-pincode-search', [PincodeController::class, 'PincodeFinder'])->name('pincode-finder');
Route::get('/{state?}/{city?}/{PostOffice?}', [PincodeController::class, 'index'])->name('index');

/*
Route::post('/getDistrict', [PincodeController::class, 'getDistrict'])->name('getDistrict');
Route::post('/getpostoffice', [PincodeController::class, 'getpostoffice'])->name('getpostoffice');
Route::get('/find-pincode', [PincodeController::class, 'findpincode'])->name('findpincode');
*/

