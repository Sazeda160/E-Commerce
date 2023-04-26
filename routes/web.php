<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[HomeController::class, 'index']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
route::get('/redirect', [HomeController::class, 'redirect']);

//Category
Route::get('/view_category',[AdminController::class, 'view_category']);
Route::post('/add_category',[AdminController::class, 'add_category']);
Route::get('/delete_category/{id}',[AdminController::class, 'delete_category']);

//Product->Admin Part
Route::get('/view_product',[AdminController::class, 'view_product']);
Route::post('/add_product',[AdminController::class, 'add_product']);
Route::get('/show_product',[AdminController::class, 'show_product']);
Route::get('/delete_product/{id}',[AdminController::class, 'delete_product']);
Route::get('/edit_product/{id}',[AdminController::class, 'edit_product']);
Route::post('/edit_product_confirm/{id}',[AdminController::class, 'edit_product_confirm']);

//User Part
Route::get('/product_details/{id}',[HomeController::class, 'product_details']);
Route::post('/add_cart/{id}',[HomeController::class, 'add_cart']);
Route::get('/show_cart',[HomeController::class, 'show_cart']);
Route::get('/remove_cart/{id}',[HomeController::class, 'remove_cart']);

Route::get('/show_order',[HomeController::class, 'show_order']);

Route::get('/cancel_order/{id}',[HomeController::class, 'cancel_order']);

Route::post('/add_comment',[HomeController::class, 'add_comment']);


Route::post('/add_reply',[HomeController::class, 'add_reply']);


Route::get('/product_search',[HomeController::class, 'product_search']);


Route::get('/products',[HomeController::class, 'products']);


Route::get('/search_product',[HomeController::class, 'search_product']);

Route::get('/blog',[HomeController::class, 'blog']);


Route::get('/contact',[HomeController::class, 'contact']);





//Order
//Cash on Delivery
Route::get('/cash_order',[HomeController::class, 'cash_order']);

//Online Payment
Route::get('/stripe/{totalprice}',[HomeController::class, 'stripe']);


Route::post('stripe/{totalprice}',[HomeController::class, 'stripePost'])->name('stripe.post');


//Show order list in Admin part

Route::get('/order',[AdminController::class, 'order']);

Route::get('/delivered/{id}',[AdminController::class, 'delivered']);
Route::get('/print_pdf/{id}',[AdminController::class, 'print_pdf']);
Route::get('/send_email/{id}',[AdminController::class, 'send_email']);
Route::post('/send_user_email/{id}',[AdminController::class, 'send_user_email']);
Route::get('/search',[AdminController::class, 'searchdata']);



require __DIR__.'/auth.php';
