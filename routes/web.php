<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ChoreController;
use App\Http\Controllers\PersonController;

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

// SITE

// Site index
Route::get('/', [SiteController::class, 'index']);

//////////////


// ROOMS

// Show all rooms
Route::get('/rooms', [RoomController::class, 'index']);

// Show single room
Route::get('/rooms/{room}', [RoomController::class, 'show']);

//////////////


// CHORES

// Show all chores
Route::get('/chores', [ChoreController::class, 'index']);

// Show single chore
Route::get('/chores/{map}', [ChoreController::class, 'show']);

//////////////


// PERSONS

// Show all persons
Route::get('/persons', [PersonController::class, 'index']);

//////////////
