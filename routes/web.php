<?php

use App\Http\Controllers\products;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/productsPage', [products::class, 'addProductsPage']);

Route::post('/productInsert', [products::class, 'insertProducts']);

Route::get('/products', [products::class, 'viewProductsPage']);

Route::get('/delete/{id}', [products::class, 'deleteProduct']);

Route::get('/update/{id}', [products::class, 'updatePage']);

Route::post('/updateProduct', [products::class, 'update']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
