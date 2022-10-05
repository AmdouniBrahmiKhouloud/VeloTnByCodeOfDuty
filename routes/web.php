<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VeloController;

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
    return view('base');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/page2/{name}', function ($name) {
    return'<h1>Welcome '.$name.'</h1>';
});

Route::get('/page3/{name?}', function ($name=null) {
    return'<h1>Welcome '.$name.'</h1>';
});
Route::get('/velo',[VeloController::class, 'index']);