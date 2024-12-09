<?php

use App\Http\Controllers\ContinentController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\LanguajeController;
use App\Http\Controllers\ReligionController;
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
Route::apiResources([
    'continents' => ContinentController::class,
    'countries' => CountryController::class,
    'currencies' => CurrencyController::class,
    'languajes' => LanguajeController::class,
    'religions' => ReligionController::class,
]);

Route::middleware('auth:sanctum')->group(function () {});
