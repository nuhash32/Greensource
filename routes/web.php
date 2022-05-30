<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\BackEndController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\DonateAreaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\inputAreaController;
use App\Http\Controllers\SslCommerzProductPaymentController;
use App\Http\Controllers\ProductController ;

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

/*Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


Route::get('/', function () {
    return view('FrontEnd.panel.home');
})->name('home');

/* Frontend Pages View */

Route::get('/team',[PanelController::class,'team'])->name('team.view');
Route::get('/kits',[PanelController::class,'kits'])->name('kits.view');
Route::get('/events',[PanelController::class,'events'])->name('events.view');
Route::get('/blogs',[PanelController::class,'blogs'])->name('blogs.view');
Route::get('/gallery',[PanelController::class,'gallery'])->name('gallery.view');
Route::get('/donation',[PanelController::class,'donation'])->name('donation.view');
Route::get('/faq',[PanelController::class,'faq'])->name('faq.view');
Route::get('/login', function () {
    return view('auth.login');})->name('login');;
 Route::get('/logout',[PanelController::class,'Logout'])->name('panel.logout');
 Route::get('/donate-now',[DonationController::class,'donatenow'])->name('donatenow.view');
 Route::get('/change-password',[BackEndController::class,'changepassword'])->name('changepassword.view');
 Route::get('/donation-status',[DonationController::class,'donationstatus'])->name('donationstatus.view');
 Route::post('/donation-store',[DonationController::class,'donation_store'])->name('donation.store');
 Route::get('/view-profile', [BackEndController::class, 'view_profile'])->name('profile.view');

 
 // SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/user-payment', [SslCommerzPaymentController::class, 'exampleHostedCheckout'])->name('payment.view');

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);

//SSLCOMMERZ END

//Change Password

Route::get('/change-password',[BackEndController::class,'changepassword'])->name('changepassword.view');
Route::post('/update-password',[BackEndController::class,'update_password'])->name('update_password');


//Profile Update

Route::get('/edit-profile', [BackEndController::class, 'edit_profile'])->name('edit_profile.view');
Route::post ('/update-profile', [BackEndController::class, 'update_profile'])->name('update.profile');


//Admin Controller

 Route::get('/admin-change-password',[AdminController::class,'adminchangepassword'])->name('adminchangepassword.view');
 Route::get('/view-all-donations',[AdminController::class,'admindonationstatus'])->name('viewalldonations.view');
 Route::post('/donation-store',[DonationController::class,'donation_store'])->name('donation.store');
 Route::get('/admin-view-profile', [AdminController::class, 'admin_view_profile'])->name('adminprofile.view');

 //Admin Change Password

Route::get('/admin-change-password',[AdminController::class,'adminchangepassword'])->name('adminchangepassword.view');
Route::post('/admin-update-password',[AdminController::class,'admin_update_password'])->name('admin_update_password');


//Admin Profile Update

Route::get('/admin-edit-profile', [AdminController::class, 'admin_edit_profile'])->name('admin_edit_profile.view');
Route::post ('/admin-update-profile', [AdminController::class, 'admin_update_profile'])->name('admin_update.profile');

//Admin Donate Area Control

Route::get('/add-donate-area',[DonateAreaController::class,'add_donate_area'])->name('donatearea.view');
Route::get('/donate-area-status',[DonateAreaController::class,'donate_area_status'])->name('donationareastatus.view');
Route::post('/donate-area-store',[DonateAreaController::class,'donate_area_store'])->name('donate_area.store');
Route::get('/donate-area-edit/{id}', [DonateAreaController::class, 'donate_area_edit'])->name('donate_area.edit');
Route::post ('/donate-area-update/{id}', [DonateAreaController::class, 'donate_area_update'])->name('donate_area.update');

Route::get('/donate-area-delete/{id}', [DonateAreaController::class, 'donate_area_delete'])->name('donate_area.delete');

//Admin Add View Admin Control

Route::get('/add-admin',[AdminController::class,'add_admin'])->name('addadmin.view');
Route::post('/admin-store',[AdminController::class,'admin_store'])->name('admin.store');
Route::get('/view-all-admins',[AdminController::class,'view_admin'])->name('viewadmin.view');
Route::get('/view-all-users',[AdminController::class,'view_user'])->name('viewuser.view');

//User Input Area

Route::get('/input-covered-area',[inputAreaController::class,'inputarea'])->name('inputarea.view');
Route::post('/input-area-store',[inputAreaController::class,'inputareastore'])->name('inputarea.store');
Route::get('/view-area-status',[inputAreaController::class,'viewareastatus'])->name('viewareastatus.view');

//Admin Manage Area

Route::get('/manage-area-status',[inputAreaController::class,'managearea'])->name('managearea.view');
Route::get('/manage-area-edit/{id}', [inputAreaController::class, 'manage_area_edit'])->name('manage_area.edit');
Route::post ('/manage-area-update/{id}', [inputAreaController::class, 'manage_area_update'])->name('manage_area.update');

Route::get('/test-area', [inputAreaController::class, 'testmap'])->name('testmap.view');

// Admin Product Manage Area

Route::prefix('product')->group(function(){
    Route::get('/product-view', [ProductController::class, 'ProductView'])->name('product.view');
    Route::get('/product-add', [ProductController::class, 'ProductAdd'])->name('product.add');
    Route::post('/product-store', [ProductController::class, 'ProductStore'])->name('product.store');
    Route::get('/product-edit/{id}', [ProductController::class, 'ProductEdit'])->name('product.edit');
    Route::post ('/product-update/{id}', [ProductController::class, 'ProductUpdate'])->name('product.update');
    Route::get('/product-delete/{id}', [ProductController::class, 'ProductDelete'])->name('product.delete');

    
    });

    Route::get('/buy-product', [ProductController::class, 'BuyProduct'])->name('buy.product');
    Route::post('/addcart/{id}', [ProductController::class, 'addcart'])->name('addcart.view');
    Route::get('/show-cart', [ProductController::class, 'showcart'])->name('show.cart');
    Route::get('/cart-edit/{id}', [ProductController::class, 'cart_edit'])->name('cart.edit');
    Route::post ('/cart-update/{id}', [ProductController::class, 'cart_update'])->name('cart.update');
    Route::get('/cart-delete/{id}', [ProductController::class, 'cart_delete'])->name('cart.delete');
    Route::get('/product-payment-info/{id}',[ProductController::class,'product_payment_info'])->name('product.payment.info');


 // SSLCOMMERZ Start
 //Route::get('/example1', [SslCommerzProductPaymentController::class, 'exampleEasyCheckout']);
 //Route::get('/user-payment', [SslCommerzProductPaymentController::class, 'exampleHostedCheckout'])->name('payment.view');
 
 Route::post('/payment-product', [SslCommerzProductPaymentController::class, 'index']);
 Route::post('/pay-via-ajax', [SslCommerzProductPaymentController::class, 'payViaAjax']);
 
 Route::post('/success', [SslCommerzProductPaymentController::class, 'success']);
 Route::post('/fail', [SslCommerzProductPaymentController::class, 'fail']);
 Route::post('/cancel', [SslCommerzProductPaymentController::class, 'cancel']);
 
 Route::post('/ipn', [SslCommerzProductPaymentController::class, 'ipn']);
 
 //SSLCOMMERZ END

 Route::get('/product-status',[ProductController::class,'productstatus'])->name('productstatus.view');

 Route::get('/view-confirm-products',[ProductController::class,'confirmproducts'])->name('confirmproducts.view');

 Route::get('/manage-cart/{id}', [ProductController::class, 'manage_cart'])->name('managecart.edit');
 Route::post ('/manage-cart-update/{id}', [ProductController::class, 'manage_cart_update'])->name('manage_cart.update');
 Route::get('/view-cart', [ProductController::class, 'viewcart'])->name('view.cart');