<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/allProducts', [ProductController::class, 'getAllProducts']);
Route::get('/product/{id}', [ProductController::class, 'getAProductById']);
Route::post('/insertProduct', [ProductController::class, 'insertProduct']);
Route::patch('/updateProduct/{id?}', [ProductController::class, 'updateProduct']);
Route::delete('/deleteProduct/{id}', [ProductController::class, 'deleteProduct']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
