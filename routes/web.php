<?php

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


Route::get('/admin', function () {
    return view('auth.login');
});

Route::get('/admin/login', function () {
    return view('auth.login');
});

Route::get('/verified', function () {
    return view('verified_email');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('suppliers')->group(function() {

    Route::get('/list','Admin\SuppliersController@list')->name('supplier.list');
    Route::get('/add','Admin\SuppliersController@add')->name('supplier.add');
    Route::post('/save','Admin\SuppliersController@save')->name('supplier.save');
    Route::get('/edit/{id}','Admin\SuppliersController@edit')->name('supplier.edit');
    Route::post('/update','Admin\SuppliersController@update')->name('supplier.update');

     Route::get('/delete','Admin\SuppliersController@delete')->name('supplier.delete');
});


Route::prefix('products')->group(function() {

    Route::get('/list','Admin\ProductsController@list')->name('product.list');
    Route::get('/add','Admin\ProductsController@add')->name('product.add');
    Route::post('/save','Admin\ProductsController@save')->name('product.save');
    Route::get('/edit/{id}','Admin\ProductsController@edit')->name('product.edit');
    Route::post('/update','Admin\ProductsController@update')->name('product.update');

     Route::get('/delete','Admin\ProductsController@delete')->name('product.delete');
});

Route::prefix('services')->group(function() {

    Route::get('/list','Admin\ServiceController@list')->name('service.list');
    Route::get('/add','Admin\ServiceController@add')->name('service.add');
    Route::post('/save','Admin\ServiceController@save')->name('service.save');
    Route::get('/edit/{id}','Admin\ServiceController@edit')->name('service.edit');
    Route::post('/update','Admin\ServiceController@update')->name('service.update');
     Route::get('/delete','Admin\ServiceController@delete')->name('service.delete');
});

Route::prefix('services-providers')->group(function() {

    Route::get('/list','Admin\ServiceProviderController@list')->name('service.provider.list');
    Route::get('/add','Admin\ServiceProviderController@add')->name('service.provider.add');
    Route::post('/save','Admin\ServiceProviderController@save')->name('service.provider.save');
     Route::get('/edit/{id}','Admin\ServiceProviderController@edit')->name('service.edit');
    Route::post('/update','Admin\ServiceProviderController@update')->name('service.provider.update');
});


Route::prefix('trainer-courses')->group(function() {

    Route::get('/list','Admin\TrainingCoursesController@list')->name('courses.list');
    Route::get('/add','Admin\TrainingCoursesController@add')->name('courses.add');
    Route::post('/save','Admin\TrainingCoursesController@save')->name('courses.save');
    Route::get('/edit/{id}','Admin\TrainingCoursesController@edit')->name('courses.edit');
    Route::post('/update','Admin\TrainingCoursesController@update')->name('courses.update');
     Route::get('/delete','Admin\TrainingCoursesController@delete')->name('courses.delete');
});

Route::prefix('training-centers')->group(function() {

    Route::get('/list','Admin\TrainingCentersController@list')->name('training.centers.list');
    Route::get('/add','Admin\TrainingCentersController@add')->name('training.centers.add');
    Route::post('/save','Admin\TrainingCentersController@save')->name('training.centers.save');
     Route::get('/edit/{id}','Admin\TrainingCentersController@edit')->name('training.centers.edit');
    Route::post('/update','Admin\TrainingCentersController@update')->name('training.centers.update');
});


/******** Admin Product Enquiry ******/

Route::get('/enquiry/list', 'EnquiryController@list')->name('enquiry.list');

/******** Admin Service Enquiry ******/

Route::get('/service/enquiry/list', 'EnquiryController@listServiceEnquiry')->name('enquiry.service.list');

/******** Admin Trainer Enquiry ******/

Route::get('/trainee/enquiry/list', 'EnquiryController@listTrainerEnquiry')->name('enquiry.trainer.list');

/******** Product Enquiry ******/


Route::get('/product/{id}', 'EnquiryController@enquiry')->name('enquiry');

Route::post('/enquiry/add', 'EnquiryController@enquirySave')->name('enquiry.add');


/******** Service Enquiry ******/


Route::get('/service/enquiry/{id}', 'EnquiryController@serviceEnquiry')->name('service.enquiry');

Route::post('/service/enquiry/add', 'EnquiryController@serviceEnquirySave')->name('service.enquiry.add');

/******** Service Enquiry ******/


Route::get('/testEmail', 'EnquiryController@testEmail')->name('testEmail');


Route::get('/trainee/enquiry/{id}', 'EnquiryController@traineeEnquiry')->name('trainee.enquiry');

Route::post('/trainee/enquiry/add', 'EnquiryController@traineeEnquirySave')->name('trainee.enquiry.add');


Route::get('/clear', function () {
    Artisan::call('view:clear');
    Artisan::call('config:cache');
     Artisan::call('config:clear');
      Artisan::call('cache:clear');
    echo 'done';
});
