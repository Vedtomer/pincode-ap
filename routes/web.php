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
Route::get('sitemap.xml',[SitemapController::class, 'index']);
Route::get('pincode-finder', [PincodeController::class, 'PincodeFinder']);
Route::get('/{state?}/{city?}/{PostOffice?}', [PincodeController::class, 'index'])->name('index');

/*
Route::post('/getDistrict', [PincodeController::class, 'getDistrict'])->name('getDistrict');
Route::post('/getpostoffice', [PincodeController::class, 'getpostoffice'])->name('getpostoffice');
Route::get('/find-pincode', [PincodeController::class, 'findpincode'])->name('findpincode');
*/

