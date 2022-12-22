<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\AvionController;
use App\Http\Controllers\FabricanteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/** LOGIN */
Route::post('/login', [LoginController::class, 'login'])->name('login');

/** FABRICANTES */
Route::group(['prefix' => 'fabricantes', 'middleware' => ['auth:sanctum']], function () { 
    Route::get('/', [FabricanteController::class, 'index']);
    Route::get('/{fabricante}', [FabricanteController::class, 'show']);
    Route::put('/{fabricante}', [FabricanteController::class, 'update']);
    Route::post('/', [FabricanteController::class, 'create']);
    Route::delete('/{fabricante}', [FabricanteController::class, 'destroy']);
});

/** AVIONES */
Route::group(['prefix' => 'aviones', 'middleware' => ['auth:sanctum']], function () {
    Route::get('/', [AvionController::class, 'index']);
    Route::get('/{avion}', [AvionController::class, 'show']);
    Route::put('/{avion}', [AvionController::class, 'update']);
    Route::post('/', [AvionController::class, 'create']);
    Route::delete('/{avion}', [AvionController::class, 'destroy']);
});
