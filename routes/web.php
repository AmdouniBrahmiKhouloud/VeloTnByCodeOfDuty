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
Route::get('/reservation', function () {
    return view('location.front');
});
/* Velo*/
Route::get('/velo',[VeloController::class, 'index'])->middleware('auth');
Route::get('/velo/add',[VeloController::class, 'create'])->middleware('auth');
Route::post('/velo/store',[VeloController::class, 'store'])->middleware('auth');
Route::get('/editvelo/{velo}',[VeloController::class, 'edit'])->middleware('auth');
Route::post('/updatevelo/{velo}',[VeloController::class, 'update'])->middleware('auth');
Route::get('/velo/remove/{velo}',[VeloController::class, 'destroy'])->middleware('auth');
/*balades*/
Route::get('/balades',[BaladeController::class, 'index'])->middleware('auth');
Route::get('/balades/add',[BaladeController::class, 'create'])->middleware('auth');
Route::post('/balades/store',[BaladeController::class, 'store'])->middleware('auth');
Route::get('/editbalade/{balade}',[BaladeController::class, 'edit'])->middleware('auth');
Route::post('/updatebalade/{balade}',[BaladeController::class, 'update'])->middleware('auth');
Route::get('/balades/remove/{balade}',[BaladeController::class, 'destroy'])->middleware('auth');
/*Event*/
Route::get('/evenements',[EvenementController::class, 'index'])->middleware('auth');
Route::get('/evenements/add',[EvenementController::class, 'create'])->middleware('auth');
Route::post('/evenements/store',[EvenementController::class, 'store'])->middleware('auth');
Route::get('/editevenement/{evenement}',[EvenementController::class, 'edit'])->middleware('auth');
Route::post('/updateevenement/{evenement}',[EvenementController::class, 'update'])->middleware('auth');
Route::get('/evenement/remove/{evenement}',[EvenementController::class, 'destroy'])->middleware('auth');
/*Location*/
Route::get('/location',[LocationController::class, 'index'])->middleware('auth');
Route::get('/location/create',[LocationController::class, 'create'])->middleware('auth');
Route::post('/location/store',[LocationController::class, 'store'])->middleware('auth');
Route::get('/editlocation/{location}',[LocationController::class, 'edit'])->middleware('auth');
Route::post('/updatelocation/{location}',[LocationController::class, 'update']);
Route::get('/location/remove/{location}',[LocationController::class, 'destroy'])->middleware('auth');
/* Authentification routes*/
Auth::routes();
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::put('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile-update');
