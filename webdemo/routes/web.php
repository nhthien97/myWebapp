 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

Route::get('/', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);

Route::get('/cart', [CartController::class, 'index']);
Route::post('/cart/add/{id}', [CartController::class, 'add']); 
