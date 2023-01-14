<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GracebebieController;

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


Route::get('gracebebies', [GracebebieController::class, 'fetchAll']); 
Route::post('gracebebies', [GracebebieController::class, 'store']);
Route::get('gracebebies/{id}', [GracebebieController::class, 'show']);
Route::delete('gracebebies/{id}', [GracebebieController::class, 'destroy']); 
Route::put('gracebebies/{id}', [GracebebieController::class, 'update']);

