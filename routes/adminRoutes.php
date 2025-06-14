 <?php

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
Auth::routes();

Route::get('autologin', function (\Illuminate\Http\Request $request) {
    $email = $request->query('email');
    $user = \App\Models\Admin::where('email', $email)->first();

    if ($user) {
        Auth::guard('admin')->login($user);

        return redirect()->route('admin.home');
    }

    // Handle case where user is not found
    // You may want to redirect them to an error page or perform some other action
})->name('autologin');

Route::get('/login/admin', [App\Http\Controllers\Auth\LoginController::class, 'showAdminLoginForm'])->name('admin.login');

Route::post('/login/admin', [App\Http\Controllers\Auth\LoginController::class, 'adminLogin'])->name('admin.login.post');

Route::group([ 'prefix' => 'admin'], function () {

    Route::get('/home', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.home');

    Route::get('/buyers/list', [App\Http\Controllers\Admin\DashboardController::class, 'buyersList'])->name('admin.buyers.list');

    Route::get('/sellers/list', [App\Http\Controllers\Admin\DashboardController::class, 'sellersList'])->name('admin.sellers.list');

     Route::get('/enquiry/list', [App\Http\Controllers\Admin\DashboardController::class, 'enquiryList'])->name('admin.enquiry.list');

    Route::get('/products/list', [App\Http\Controllers\Admin\DashboardController::class, 'productsList'])->name('admin.products.list');

    Route::get('/configurations', [App\Http\Controllers\Admin\DashboardController::class, 'configurationsList'])->name('configurations.list');


//subscription_new
    Route::get('/subscription_new', [App\Http\Controllers\Admin\DashboardController::class, 'subscription_new'])->name('subscription_new.list');
    Route::post('/users/{user}/accept', [App\Http\Controllers\Admin\DashboardController::class, 'accept'])->name('users.accept');
    Route::post('/users/{user}/reject', [App\Http\Controllers\Admin\DashboardController::class, 'reject'])->name('users.reject');
//subscriptions
    Route::get('/subscriptions', [App\Http\Controllers\Admin\DashboardController::class, 'subscriptions'])->name('subscriptions.list');

//user management
    Route::get('/usermanagement', [App\Http\Controllers\Admin\DashboardController::class, 'usermanagementList'])->name('usermanagement.list');
    Route::post('/users/{user}/activate', [App\Http\Controllers\Admin\DashboardController::class, 'activate'])->name('users.activate');
    Route::post('/users/{user}/deactivate', [App\Http\Controllers\Admin\DashboardController::class, 'deactivate'])->name('users.deactivate');

//user management
    Route::get('/unverifiedusers', [App\Http\Controllers\Admin\DashboardController::class, 'unverifiedusersList'])->name('unverifiedusers.list');
    Route::post('/users/{user}/verify', [App\Http\Controllers\Admin\DashboardController::class, 'verify'])->name('unverifiedusers.verify');

//notification
    Route::get('/notifications', [App\Http\Controllers\Admin\NotificationController::class, 'index'])->name('notifications.index');
    Route::get('/notifications/create', [App\Http\Controllers\Admin\NotificationController::class, 'create'])->name('notifications.create');
    Route::post('/admin/notifications', [App\Http\Controllers\Admin\NotificationController::class, 'store'])->name('notifications.store');
    Route::get('/notifications/{id}/edit', [App\Http\Controllers\Admin\NotificationController::class, 'edit'])->name('notifications.edit');
    Route::put('/admin/notifications/{id}', [App\Http\Controllers\Admin\NotificationController::class, 'update'])->name('notifications.update');
    Route::delete('/notifications/{id}', [App\Http\Controllers\Admin\NotificationController::class, 'destroy'])->name('notifications.destroy');


     Route::group([ 'prefix' => 'banner'], function () {

        Route::get('/list', [App\Http\Controllers\Admin\BannerController::class, 'list'])->name('banner.list');

        Route::get('/add', [App\Http\Controllers\Admin\BannerController::class, 'add'])->name('banner.add');

         Route::post('/save', [App\Http\Controllers\Admin\BannerController::class, 'save'])->name('banner.save');

        Route::get('/edit/{id}', [App\Http\Controllers\Admin\BannerController::class, 'edit'])->name('banner.edit');

        Route::post('/update', [App\Http\Controllers\Admin\BannerController::class, 'update'])->name('banner.update');
        Route::get('/delete', [App\Http\Controllers\Admin\BannerController::class, 'delete'])->name('banner.delete');
    });

      Route::group([ 'prefix' => 'supporting_partner'], function () {

        Route::get('/list', [App\Http\Controllers\Admin\SupportingPartnerController::class, 'list'])->name('supporting_partner.list');

        Route::get('/add', [App\Http\Controllers\Admin\SupportingPartnerController::class, 'add'])->name('supporting_partner.add');

         Route::post('/save', [App\Http\Controllers\Admin\SupportingPartnerController::class, 'save'])->name('supporting_partner.save');

        Route::get('/edit/{id}', [App\Http\Controllers\Admin\SupportingPartnerController::class, 'edit'])->name('supporting_partner.edit');

        Route::post('/update', [App\Http\Controllers\Admin\SupportingPartnerController::class, 'update'])->name('supporting_partner.update');
        Route::get('/delete', [App\Http\Controllers\Admin\SupportingPartnerController::class, 'delete'])->name('supporting_partner.delete');
    });

    Route::group([ 'prefix' => 'brand'], function () {

        Route::get('/list', [App\Http\Controllers\Admin\BrandController::class, 'list'])->name('brand.list');

        Route::get('/add', [App\Http\Controllers\Admin\BrandController::class, 'add'])->name('brand.add');

         Route::post('/save', [App\Http\Controllers\Admin\BrandController::class, 'save'])->name('brand.save');

        Route::get('/edit/{id}', [App\Http\Controllers\Admin\BrandController::class, 'edit'])->name('brand.edit');

        Route::post('/update', [App\Http\Controllers\Admin\BrandController::class, 'update'])->name('brand.update');
        Route::get('/delete', [App\Http\Controllers\Admin\BrandController::class, 'delete'])->name('brand.delete');
    });

    Route::group([ 'prefix' => 'subscription_package'], function () {

        Route::get('/list', [App\Http\Controllers\Admin\SubscriptionPackageController::class, 'list'])->name('subscription_package.list');

        Route::get('/add', [App\Http\Controllers\Admin\SubscriptionPackageController::class, 'add'])->name('subscription_package.add');

         Route::post('/save', [App\Http\Controllers\Admin\SubscriptionPackageController::class, 'save'])->name('subscription_package.save');

        Route::get('/edit/{id}', [App\Http\Controllers\Admin\SubscriptionPackageController::class, 'edit'])->name('subscription_package.edit');

        Route::post('/update', [App\Http\Controllers\Admin\SubscriptionPackageController::class, 'update'])->name('subscription_package.update');
        Route::get('/delete', [App\Http\Controllers\Admin\SubscriptionPackageController::class, 'delete'])->name('subscription_package.delete');
    });

    Route::group([ 'prefix' => 'models'], function () {

        Route::get('/list', [App\Http\Controllers\Admin\ModelController::class, 'list'])->name('models.list');

        Route::get('/add', [App\Http\Controllers\Admin\ModelController::class, 'add'])->name('models.add');

         Route::post('/save', [App\Http\Controllers\Admin\ModelController::class, 'save'])->name('models.save');

        Route::get('/edit/{id}', [App\Http\Controllers\Admin\ModelController::class, 'edit'])->name('models.edit');

        Route::post('/update', [App\Http\Controllers\Admin\ModelController::class, 'update'])->name('models.update');
        Route::get('/delete', [App\Http\Controllers\Admin\ModelController::class, 'delete'])->name('models.delete');
    });

    Route::group([ 'prefix' => 'state'], function () {

        Route::get('/list', [App\Http\Controllers\Admin\StateController::class, 'list'])->name('state.list');

        Route::get('/add', [App\Http\Controllers\Admin\StateController::class, 'add'])->name('state.add');

         Route::post('/save', [App\Http\Controllers\Admin\StateController::class, 'save'])->name('state.save');

        Route::get('/edit/{id}', [App\Http\Controllers\Admin\StateController::class, 'edit'])->name('state.edit');

        Route::post('/update', [App\Http\Controllers\Admin\StateController::class, 'update'])->name('state.update');
        Route::get('/delete', [App\Http\Controllers\Admin\StateController::class, 'delete'])->name('state.delete');
    });

    Route::group([ 'prefix' => 'country'], function () {

        Route::get('/list', [App\Http\Controllers\Admin\CountryController::class, 'list'])->name('country.list');

        Route::get('/add', [App\Http\Controllers\Admin\CountryController::class, 'add'])->name('country.add');

         Route::post('/save', [App\Http\Controllers\Admin\CountryController::class, 'save'])->name('country.save');

        Route::get('/edit/{id}', [App\Http\Controllers\Admin\CountryController::class, 'edit'])->name('country.edit');

        Route::post('/update', [App\Http\Controllers\Admin\CountryController::class, 'update'])->name('country.update');
        Route::get('/delete', [App\Http\Controllers\Admin\CountryController::class, 'delete'])->name('country.delete');
    });

    Route::group([ 'prefix' => 'city'], function () {

        Route::get('/list', [App\Http\Controllers\Admin\CityController::class, 'list'])->name('city.list');

        Route::get('/add', [App\Http\Controllers\Admin\CityController::class, 'add'])->name('city.add');

         Route::post('/save', [App\Http\Controllers\Admin\CityController::class, 'save'])->name('city.save');

        Route::get('/edit/{id}', [App\Http\Controllers\Admin\CityController::class, 'edit'])->name('city.edit');

        Route::post('/update', [App\Http\Controllers\Admin\CityController::class, 'update'])->name('city.update');
        Route::get('/delete', [App\Http\Controllers\Admin\CityController::class, 'delete'])->name('city.delete');
    });

    Route::group([ 'prefix' => 'category'], function () {

        Route::get('/list', [App\Http\Controllers\Admin\CategoryController::class, 'list'])->name('category.list');

        Route::get('/add', [App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('category.add');

         Route::post('/save', [App\Http\Controllers\Admin\CategoryController::class, 'save'])->name('category.save');

        Route::get('/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('category.edit');

        Route::post('/update', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('category.update');
        Route::get('/delete', [App\Http\Controllers\Admin\CategoryController::class, 'delete'])->name('category.delete');
    });


    Route::group([ 'prefix' => 'subcategory'], function () {

        Route::get('/list', [App\Http\Controllers\Admin\SubCategoryController::class, 'list'])->name('subcategory.list');

        Route::get('/add', [App\Http\Controllers\Admin\SubCategoryController::class, 'add'])->name('subcategory.add');

         Route::post('/save', [App\Http\Controllers\Admin\SubCategoryController::class, 'save'])->name('subcategory.save');

        Route::get('/edit/{id}', [App\Http\Controllers\Admin\SubCategoryController::class, 'edit'])->name('subcategory.edit');

        Route::post('/update', [App\Http\Controllers\Admin\SubCategoryController::class, 'update'])->name('subcategory.update');
        Route::get('/delete', [App\Http\Controllers\Admin\SubCategoryController::class, 'delete'])->name('subcategory.delete');
    });

});
?>