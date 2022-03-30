<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ProductController;

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
})->name('home');
  Route::get('/currencies', [CurrencyController::class, 'currencies'])->name('currency.store');
  Route::get('/clients', [ClientsController::class, 'clients'])->name('clients.json');
  Route::get('/products', [ProductController::class, 'index'])->name('products.index');
  Route::post('/products', [ProductController::class, 'store'])->name('products.store');
