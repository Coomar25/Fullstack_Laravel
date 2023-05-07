<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KhaltiController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'welcome_index']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


Route::middleware(['preventbackhistory'])->group(function () {
    // The upper middleware is to prevent the back button to access page
    Route::middleware(['auth'])->group(function () {
        Route::get('/home', [UserController::class, 'user_index'])->name('UserIndex');
        Route::get('/user/about', [UserController::class, 'userabout'])->name('UserAbout');
        Route::get('/user/orders', [UserController::class, 'userorders'])->name('UserOrders');
        Route::get('/user/shop', [UserController::class, 'usershop'])->name('UserShop');
        Route::get('/user/contact', [UserController::class, 'usercontact'])->name('UserContact');
        Route::get('/portfoilio', [UserController::class, 'portfoliosite'])->name('PortfolioSite');
        Route::get('/user/cart', [UserController::class, 'usercart'])->name('UserCart');


        // For add to card the dedicated routing is written below

        Route::post('/addcart/{id}', [UserController::class, 'addcart'])->name('AddCart');
        Route::get('/user/delete/{id}', [UserController::class, 'cartdelete'])->name('delete.cart');

        // for ordering products
        Route::get('/cart/order', [UserController::class, 'orderproduct'])->name('order_product');

        // for storing checkout
        Route::post('/cart/order/checkout', [UserController::class, 'checkoutstore'])->name('storecheckout');

        Route::post('/user/message', [UserController::class, 'usermessage'])->name('UserMessage');

        Route::post('/checkout/pay', [KhaltiController::class, 'verify'])->name('khalti.verify');
    });
});


Route::middleware(['preventbackhistory'])->group(function () {

    Route::middleware(['auth', 'authadmin'])->group(function () {

        Route::get('/admin/dashboard', [AdminController::class, 'admindashboard'])->name('AdminDashboard');
        Route::get('/admin/addproduct', [AdminController::class, 'adminaddproduct'])->name('AddProduct');
        Route::get('/admin/order', [AdminController::class, 'adminorder'])->name('Order');
        Route::get('/admin/users', [AdminController::class, 'adminuser'])->name('Users');
        Route::get('/admin/message', [AdminController::class, 'message'])->name('Message');

        Route::get('/admin/edit/{product_id}', [AdminController::class, 'edit'])->name('product.edit');


        Route::post('/admin/addproduct/store', [AdminController::class, 'storeproduct'])->name('product.store');
        Route::post('/admin/update/{product_id}', [AdminController::class, 'updateproduct'])->name('product.update');
        Route::get('/admin/delete/{product_id}', [AdminController::class, 'deleteproduct'])->name('product.delete');


        // for updating status

        Route::post('/admin/order/{order_intel_id}', [AdminController::class, 'updatecheckout'])->name('checkout.update');
    });
});



require __DIR__ . '/auth.php';