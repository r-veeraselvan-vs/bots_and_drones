<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controller\CommonController;
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
 // routes/web.php

use App\Http\Controllers\CompareController;

// Add this route definition
Route::get('/compare', [CompareController::class, 'index'])->name('compare.index');
Route::get('/compare/home', [CompareController::class, 'home'])->name('compare');
Route::get('/get-applications', [CompareController::class, 'getApplications'])->name('getApplications');
Route::get('/get-products', [CompareController::class, 'getProducts'])->name('getProducts');
Route::post('/check-email-unique', [App\Http\Controllers\CommonController::class, 'checkEmailUnique'])->name('checkemail');
Route::post('/check-company-email-unique', [App\Http\Controllers\CommonController::class, 'checkCompanyEmailUnique'])->name('checkcompanyemail');

 
Route::get('/', [App\Http\Controllers\CommonController::class, 'index'])->name('index');
 Route::get('/check/seller/email/exist', [App\Http\Controllers\Auth\RegisterController::class, 'sellerExist'])->name('seller.exist');

 Route::get('/clear', function () {
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    echo 'done';
});
    Auth::routes(['verify' => true]);
Route::middleware(['revalidate'])->group(function () {
    Auth::routes();
});

 Route::get('/check/route', function () {
     $contact_id = Session::get('contact_id');
     if($contact_id==null)
    {
        if(Session::get('shop_url')!=null)
        {
             return redirect('wishlist/'.Session::get('wishlist')."/".Session::get('wishlist_type')); 
        }
        elseif(Auth::user()->seller=="N")
        {
            if(Auth::user()->email_verified_at!=null)
            {
                 return redirect()->route('enquiry.buyer.list'); 
            }
            else
            {
                   Auth::logout();
                 return redirect()->route('buyer.verify'); 
            }
        }
        elseif(Auth::user()->seller==null)
        {
            if(Auth::user()->email_verified_at!=null)
            {
                 return redirect()->route('enquiry.buyer.list'); 
            }
            else
            {
                   Auth::logout();
                 return redirect()->route('buyer.verify'); 
            } 
        }
        else
        {
            if(Auth::user()->email_verified_at!=null)
            {
                 return redirect()->route('product.list'); 
            }
            else
            {
                   Auth::logout();
                 return redirect()->route('seller.verify'); 
            }
           
        }
         
    }
    else
    {
         
        return redirect()->route('contact', [$contact_id]);
     
    }
});

Route::post('/login/check', [App\Http\Controllers\Auth\LoginController::class, 'loginCheck'])->name('login.check');
 Route::get('/seller/route', function () {
     return view('seller.verify');
     
})->name('seller.verify');

// New route for buyer verification
Route::get('/buyer/route', function () {
    // Add your logic for buyer verification here
    return view('buyer.verify'); // Replace with your actual buyer verification view
})->name('buyer.verify');

Route::get('/home', [App\Http\Controllers\CommonController::class, 'listProducts'])->name('seller.verify');

Route::get('/subscribe', [App\Http\Controllers\CommonController::class, 'subscribe'])->name('Subscribe.index');
Route::post('/subscription', [App\Http\Controllers\CommonController::class, 'subscription'])->name('subscription.subscribe');

Route::get('/home', [App\Http\Controllers\CommonController::class, 'listProducts'])->name('home');

Route::get('/role', [App\Http\Controllers\CommonController::class, 'userRedirection'])->name('role');

Route::get('/reset/filter', [App\Http\Controllers\CommonController::class, 'resetFilter'])->name('reset.filter');


Route::get('/shop', [App\Http\Controllers\CommonController::class, 'products'])->name('products');
Route::get('/product/{slug}', [App\Http\Controllers\CommonController::class, 'product'])->name('product.details');
Route::get('/products/list', [App\Http\Controllers\CommonController::class, 'listProducts'])->name('product.list')->middleware('verified');

Route::get('/wishlist/{product_id}/{type}', [App\Http\Controllers\Seller\WishListController::class, 'add'])->name('wishlist.add');


//notifications
Route::get('/notification/list', [App\Http\Controllers\NotificationController::class, 'list'])->name('notification.list');
Route::get('/notification/{id}/view', [App\Http\Controllers\NotificationController::class, 'view'])->name('notification.view');

Route::get('/product/{menu}/{slug}/{sub_slug}', [App\Http\Controllers\CommonController::class, 'products'])->name('products');
Route::get('/enquiry/{id}', [App\Http\Controllers\Buyer\EnquiryController::class, 'enquiry'])->name('enquiry');

//---contact--seller------//
Route::get('/contact/{id}', [App\Http\Controllers\Buyer\EnquiryController::class, 'contact'])->name('contact');
Route::post('/add/contact', [App\Http\Controllers\Buyer\EnquiryController::class, 'addcontact'])->name('contact.add');
Route::get('/ordered/{id}', [App\Http\Controllers\Buyer\EnquiryController::class, 'ordered'])->name('ordered');
Route::post('/add/ordered', [App\Http\Controllers\Buyer\EnquiryController::class, 'addOrdered'])->name('ordered.add');
Route::get('/remainder', [App\Http\Controllers\Buyer\EnquiryController::class, 'remainder'])->name('remainder');

Route::group(['middleware' => 'auth'], function () {
Route::get('/dashboard', [App\Http\Controllers\CommonController::class, 'dashboard'])->name('dashboard');

Route::get('/post-ad', [App\Http\Controllers\Seller\ProductsController::class, 'postAdd'])->name('post-ad');
Route::get('/edit/product/{id}', [App\Http\Controllers\Seller\ProductsController::class, 'edit'])->name('product.edit');

Route::post('/add/product', [App\Http\Controllers\Seller\ProductsController::class, 'add'])->name('product.add');

//otp verification
Route::post('/store-otp', 'OtpController@storeOtp')->name('store.otp');
Route::get('/get-stored-otp', 'OtpController@getStoredOtp')->name('get.stored.otp');

 
Route::post('/add/enquiry', [App\Http\Controllers\Buyer\EnquiryController::class, 'addEnquiry'])->name('enquiry.add');
Route::post('/enquiry/addRemark/{id}', [App\Http\Controllers\Buyer\EnquiryController::class, 'addRemark'])->name('enquiry.addRemark');
Route::get('/order/{id}', [App\Http\Controllers\Buyer\EnquiryController::class, 'order'])->name('order');

Route::post('/add/order', [App\Http\Controllers\Buyer\EnquiryController::class, 'addOrder'])->name('order.add');

Route::get('/drone_enquiries', [App\Http\Controllers\Buyer\EnquiryController::class, 'listEnquiry'])->name('enquiry.list');

Route::get('/enquiries/buyer', [App\Http\Controllers\Buyer\EnquiryController::class, 'listBuyerEnquiry'])->name('enquiry.buyer.list');
Route::get('/enquiries/seller/delete', [App\Http\Controllers\Buyer\EnquiryController::class, 'sellerdelete'])->name('seller.delete');
Route::get('/enquiries/buyer/delete', [App\Http\Controllers\Buyer\EnquiryController::class, 'buyerdelete'])->name('buyer.delete');

Route::post('/handle-request/{contact}', [App\Http\Controllers\Buyer\EnquiryController::class, 'handleRequest'])->name('handle.request');
Route::post('/handle-accept/{contact}', [App\Http\Controllers\Buyer\EnquiryController::class, 'handleAccept'])->name('handle.accept');


Route::get('/delete/product/{id}/{status}', [App\Http\Controllers\Seller\ProductsController::class, 'deleteProduct'])->name('product.delete');


Route::get('/image/delete/product', [App\Http\Controllers\Seller\ProductsController::class, 'deleteImage'])->name('product.image.delete');

Route::get('/specification/delete/product', [App\Http\Controllers\Seller\ProductsController::class, 'deleteSpecification'])->name('product.specification.delete');


Route::get('/storages', function () {
    Artisan::call('storage:link');
    echo 'done';
});
Route::get('/list/wishlist', [App\Http\Controllers\Seller\WishListController::class, 'listWishlistedItems'])->name('wishlist.list');



Route::post('/add/product/commercial', [App\Http\Controllers\Seller\ProductsController::class, 'addCommercial'])->name('product.add.commercial');

Route::post('/add/product/robots', [App\Http\Controllers\Seller\ProductsController::class, 'addRobots'])->name('product.add.robots');

Route::post('/add/product/accessories', [App\Http\Controllers\Seller\ProductsController::class, 'addAccessories'])->name('product.add.accessories');


Route::post('/update/product', [App\Http\Controllers\Seller\ProductEditController::class, 'update'])->name('product.update');


Route::post('/update/product/commercial', [App\Http\Controllers\Seller\ProductEditController::class, 'updateCommercial'])->name('product.update.commercial');

Route::post('/update/product/robots', [App\Http\Controllers\Seller\ProductEditController::class, 'updateRobots'])->name('product.update.robots');

Route::post('/update/product/accessories', [App\Http\Controllers\Seller\ProductEditController::class, 'updateAccessories'])->name('product.update.accessories');


//----------------profile--------------//
Route::get('/profile/index', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');
Route::get('/profile/edit/{id}', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/update/{id}', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
Route::get('/profile/delete', [App\Http\Controllers\ProfileController::class, 'delete'])->name('profile.delete');

//----------------Change Password--------------//
 Route::post('/profile/changePassword/update', [App\Http\Controllers\ProfileController::class, 'updateChangePassword'])->name('profile.changePassword');
Route::get('/profile/changePassword', [App\Http\Controllers\ProfileController::class, 'viewChangePassword'])->name('profile.view.changePassword');


Route::get('/wishlist/delete', [App\Http\Controllers\Seller\WishListController::class, 'Delete'])->name('wishlist.Delete');

});
include "adminRoutes.php";