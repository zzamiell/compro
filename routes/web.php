<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/contactus', [HomeController::class, 'contactus'])->name('contactus');
Route::get('/service_ai', [HomeController::class, 'service_ai'])->name('service_ai');
Route::get('/service_ai2', [HomeController::class, 'service_ai2'])->name('service_ai2');
Route::get('/service_hargapedia', [HomeController::class, 'service_hargapedia'])->name('service_hargapedia');
Route::get('/service_dataextraction', [HomeController::class, 'service_dataextraction'])->name('service_dataextraction');
Route::get('/test', [HomeController::class, 'test'])->name('test');
Route::get('/getData', [HomeController::class, 'getData'])->name('getData');
Route::post('/addData', [HomeController::class, 'addData'])->name('addData');

Route::get('/manage-extraction', [HomeController::class, 'manageextraction'])->name('manageextraction');
Route::post('/addData', [HomeController::class, 'addData'])->name('addData');
Route::delete('/deletedata/{id}', [HomeController::class, 'deletedata'])->name('deletedata');
