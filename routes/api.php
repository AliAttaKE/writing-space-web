<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Admin\OrderManagement\PlaceOrderController;
use App\Http\Controllers\FileChatGPTController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('/new-order',[PlaceOrderController::class,'new_order_api'])->name('new-order-api');
Route::get('/new-folder',[PlaceOrderController::class,'new_folder_api'])->name('new-folder-api');

Route::post('/new-order-status',[PlaceOrderController::class,'new_order_api_status'])->name('new-order-api-status');
Route::get('/new-order-completed',[PlaceOrderController::class,'new_order_api_completed'])->name('new-order-completed');
Route::get('/new-order-completed-string',[PlaceOrderController::class,'new_order_api_completed_string'])->name('new-order-complete-string');
Route::get('/order-by-id/{id}',[PlaceOrderController::class,'order_by_id'])->name('order_by_id');

Route::post('/store_file', [FileChatGPTController::class, 'store_api'])->name('cms_pages.store');



Route::post('/order-complete-rs',[PlaceOrderController::class,'order_complete_rs'])->name('order-complete-rs');