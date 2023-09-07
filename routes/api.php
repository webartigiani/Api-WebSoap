<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\MultipleSubscriptionController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/catalogo', CatalogController::class);
Route::delete('/iscrizione', [SubscriptionController::class, 'deleteSubscription']);
Route::post('/iscrizione', [SubscriptionController::class, 'addSubscription']);
Route::post('/iscrizionemultipla', MultipleSubscriptionController::class);
