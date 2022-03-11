<?php

use App\Http\Controllers\AmoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/amoSendDeal', [AmoController::class, "amoSendDeal"]);
Route::post('/addAmoIntegration', [AmoController::class, "addAmoIntegration"]);
Route::get('/{any?}', function () {
    return view('app');
})->where('any', '^(?!api\/)[\/\w\.-]*');
