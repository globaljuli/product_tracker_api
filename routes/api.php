<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Products\ServeProductsController;
use App\Http\Controllers\Purchase\ServePurchasesController;
use App\Http\Controllers\Purchase\FinishPurchaseController;

use App\Http\Controllers\Uses\RegisterUseController;
use App\Http\Controllers\Uses\ServeUsesController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::middleware('json')->group(function () {
Route::get('/products', [ServeProductsController::class, 'getAllProducts']);
Route::get('/products/{productId}', [ServeProductsController::class, 'getAllProducts']);
Route::get('/uses/{purchaseId}', [ServeUsesController::class, 'getAllPurchaseUses']);
Route::post('/uses/register', [RegisterUseController::class, 'registerUse']);

Route::get('/purchase/{productId}', [ServePurchasesController::class, 'getPurchase']);
Route::get('/purchases', [ServePurchasesController::class, 'getAllPurchases']);

Route::get('/purchase/finish/{purchaseId}', [FinishPurchaseController::class, 'markPurchaseAsFinished']);

//});
