<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\EmailController;
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


Route::post('/register', [UserController::class, 'store']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/change-password', [UserController::class, 'changePassword']);
Route::put('/users/status-remarks/{id}', [UserController::class, 'updateUser']);
Route::get('/users/pending', [UserController::class, 'getPendingUsers']);

Route::get('/places', [PlaceController::class, 'index']);  
Route::post('/places', [PlaceController::class, 'store']); 
Route::get('/approvedplaces', [PlaceController::class, 'carousel']);
Route::get('/pending', [PlaceController::class, 'pending']);
Route::get('/places/{place}', [PlaceController::class, 'show']);
Route::put('/places/{id}', [PlaceController::class, 'update']); 
Route::delete('/places/{place}', [PlaceController::class, 'destroy']); 
Route::put('/places/{id}/status', [PlaceController::class, 'updateStatus']);

