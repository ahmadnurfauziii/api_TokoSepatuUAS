<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\ProductCategoryController;
use App\Http\Controllers\API\UserController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// Route::get('products',[ProductController::class, 'all']); 
// Route::get('categories',[ProductCategoryController::class, 'all']);

 
Route::middleware(['auth:sanctum'])->group( function () {
    Route::apiResource('categories', ProductCategoryController::class);
    Route::apiResource('products', ProductController::class);
});

Route::post('register',[UserController::class, 'register']);
Route::post('login',[UserController::class, 'login']); 

Route::middleware('auth:sanctum')->group(function (){
    Route::get('user', [UserController::class, 'fetch']); 
    Route::post('logout', [UserController::class, 'logout']);          
    });


