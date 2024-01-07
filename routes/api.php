<?php

use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

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

Route::controller(PeopleController::class)->group(function () {    
    Route::get(   '/oleksa/54521/people', 'index');
    Route::get(   '/oleksa/54521/people/{person}', 'getPerson');
    Route::post(  '/oleksa/54521/people', 'create');
    Route::patch( '/oleksa/54521/people/{person}', 'updatePerson');
    Route::delete('/oleksa/54521/people/{person}', 'destroyPerson');
    Route::fallback("fallback");
});
