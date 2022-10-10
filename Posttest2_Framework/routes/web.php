<?php

use App\Models\Cake;
use App\Models\Menu;
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
Route::get('/', function () {
    return view('landing', [
    ]);
})->name('landing');

Route::get('/welcome', function () {
    return view('welcome', [
        "cakes" => Cake::all(),
        "menu" => Menu::all()
    ]);
});