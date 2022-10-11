<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/test', function () {
//     return view('test');
// });


Auth::routes();

Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::get('collections', [App\Http\Controllers\Frontend\FrontendController::class, 'categories']);
Route::get('collections/{category_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'products']);

Route::get('collections/{category_slug}/{product_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'productView']);


Route::get('/frontend/infopages/contact', [App\Http\Controllers\Frontend\ContactController::class, 'contact']);
Route::get('/frontend/infopages/story', [App\Http\Controllers\Frontend\StoryController::class, 'story']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth', 'isAdmin')->group(function () {

    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    Route::controller(App\Http\Controllers\Admin\SliderController::class)->group(function () {
        Route::get('/slider', 'index');
        Route::get('slider/create', 'create');
        Route::post('/slider', 'store');
        Route::get('/slider/{slider}/edit', 'edit');
        Route::put('/slider/{slider}', 'update');
        Route::get('/slider/{slider}/delete', 'destroy');
    }); 

    Route::controller(App\Http\Controllers\Admin\CategoryController::class)->group(function () {
        Route::get('/category', 'index');
        Route::get('category/create', 'create');
        Route::post('/category', 'store');
        Route::get('/category/{category}/edit', 'edit');
        Route::put('/category/{category}', 'update');
    });

    Route::controller(App\Http\Controllers\Admin\ProductController::class)->group(function () {
        Route::get('/products', 'index');
        Route::get('products/create', 'create');
        Route::post('/products', 'store');
        Route::get('/products/{product}/edit', 'edit');
        Route::put('/products/{product}', 'update');
        Route::get('/products/{product_id}/delete', 'destroy');
        Route::get('product-image/{product_image_id}/delete','destroyImage');
    });

    
});
