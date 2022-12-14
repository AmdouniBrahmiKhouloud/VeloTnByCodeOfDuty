<?php

use App\Http\Controllers\LocationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VeloController;
use App\Http\Controllers\BaladeController;
use App\Http\Controllers\EvenementController;
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
    return view('front.index');
});

Route::get('/about', function () {
    return view('front.about');
});
Route::get('/contact', function () {
    return view('front.contact');
});
Route::get('/cycle', function () {
    return view('front.cycle');
});
Route::get('/news', function () {
    return view('front.news');
});
Route::resource('location', LocationController::class);

Route::get('/velo',[VeloController::class, 'index']);
Route::get('/velo/add',[VeloController::class, 'create']);
Route::post('/velo/store',[VeloController::class, 'store']);
Route::get('/editvelo/{velo}',[VeloController::class, 'edit']);
Route::post('/updatevelo/{velo}',[VeloController::class, 'update']);
Route::get('/velo/remove/{velo}',[VeloController::class, 'destroy']);


Route::get('/balades',[BaladeController::class, 'index']);
Route::get('/balades/add',[BaladeController::class, 'create']);
Route::post('/balades/store',[BaladeController::class, 'store']);
Route::get('/editbalade/{balade}',[BaladeController::class, 'edit']);
Route::post('/updatebalade/{balade}',[BaladeController::class, 'update']);
Route::get('/balades/remove/{balade}',[BaladeController::class, 'destroy']);

Route::get('/evenements',[EvenementController::class, 'index']);
Route::get('/evenements/add',[EvenementController::class, 'create']);
Route::post('/evenements/store',[EvenementController::class, 'store']);
Route::get('/editevenement/{evenement}',[EvenementController::class, 'edit']);
Route::post('/updateevenement/{evenement}',[EvenementController::class, 'update']);
Route::get('/evenement/remove/{evenement}',[EvenementController::class, 'destroy']);
