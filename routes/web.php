<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\PincodeController;

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
Route::get('/', [PincodeController::class, 'index'])->name('index');
Route::post('/getDistrict', [PincodeController::class, 'getDistrict'])->name('getDistrict');
Route::post('/getpostoffice', [PincodeController::class, 'getpostoffice'])->name('getpostoffice');
Route::get('/find-pincode', [PincodeController::class, 'findpincode'])->name('findpincode');



// Route::get('/', function () {
//     return view('welcome');
// });
