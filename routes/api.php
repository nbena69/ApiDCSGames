<?php

use App\Http\Controllers\AllController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('one', [AllController::class, "meilleurAppli"]);
Route::get('two', [AllController::class, "evolutionMontant"]);
Route::get('three', [AllController::class, "evolutionVolumesProduit1_1"]);
Route::get('four', [AllController::class, "evolutionVolumesProduit1_4"]);

Route::get('listeProduits', [AllController::class, "listeProduit"]);
