<?php

use App\Http\Controllers\PetsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("pets", [PetsController::class, "index"])->name("pets.index");
Route::get("pets/create", [PetsController::class, "create"])->name("pets.create");
Route::post("pets", [PetsController::class, "store"])->name("pets.store");
