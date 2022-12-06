<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\Api;
use App\Http\Controllers\Api\FooterController;


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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/test', function() {
    p("Working");
});
//CRUD Footer
Route::get('/get-footer',[FooterController::class, 'index']);
Route::post('/post-footer',[FooterController::class, 'store']);
Route::delete('/delete-footer/{id}',[FooterController::class, 'destroy']);
Route::put('/patch-footer/{id}',[FooterController::class, 'update']);
Route::patch('/patch-footer/{id}',[FooterController::class, 'update']);
