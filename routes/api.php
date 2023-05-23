<?php

use App\Http\Controllers\DataInsertion;
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

Route::post('/transaction', [DataInsertion::class, 'insertTransaction']);

Route::post('/account-head', [DataInsertion::class, 'insertAccountHead']);

Route::post('/group', [DataInsertion::class, 'insertGroup']);