<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\WhoController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\ITConsultingController;
use App\Http\Controllers\Frontend\ITSolutionsController;
use App\Http\Controllers\Frontend\CareerController;
use App\Http\Controllers\Frontend\ContactUsController;


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

Route::get('/',[HomeController::class,'index'] );

Route::get('/who-we-are',[WhoController::class,'index'] );

Route::get('/gallery',[GalleryController::class,'index'] );

Route::get('/it-consulting',[ITConsultingController::class,'index'] );
Route::get('/energy-modelling-support',[ITConsultingController::class,'energy_modelling_support'] );

Route::get('/iot-based-solutions',[ITSolutionsController::class,'index'] );
Route::get('/blockchain-based-solutions',[ITSolutionsController::class,'blockchain'] );
Route::get('/transaction-support-solutions',[ITSolutionsController::class,'transaction'] );
Route::get('/real-time-dashboards',[ITSolutionsController::class,'dashboards'] );
Route::get('/commercial-solutions',[ITSolutionsController::class,'commercial'] );
Route::get('/knowledge-portals',[ITSolutionsController::class,'knowledge'] );
Route::get('/mobile-applications',[ITSolutionsController::class,'mobileApp'] );



Route::get('/career',[CareerController::class,'index'] );
Route::post('/career',[CareerController::class,'store'] )->name('career.send');

Route::get('/contact_us',[ContactUsController::class,'index'] );
Route::post('/contact_us',[ContactUsController::class,'sendEmail'] )->name('contact_us.send');

