<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\IndustryController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rooms', [RoomController::class, 'index']);
Route::get('/chores', [ChoreController::class, 'index']);
Route::get('/persons', [PersonController::class, 'index']);
