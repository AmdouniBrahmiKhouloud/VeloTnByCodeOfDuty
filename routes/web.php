<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VeloController;
use App\Http\Controllers\AssociationController;

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

Route::get('/velo',[VeloController::class, 'index']);

Route::get('/velo/add',[VeloController::class, 'create']);

Route::post('/velo/store',[VeloController::class, 'store']);
Route::get('/editvelo/{velo}',[VeloController::class, 'edit']);
Route::post('/updatevelo/{velo}',[VeloController::class, 'update']);

Route::get('/velo/remove/{velo}',[VeloController::class, 'destroy']);


//association

Route::get('/association',[AssociationController::class, 'index']);

Route::get('/association/add',[AssociationController::class, 'create']);
Route::post('/association/store',[AssociationController::class, 'store']);

Route::get('/editassociation/{association}',[AssociationController::class, 'edit']);
Route::post('/updateAssocaiton/{association}',[AssociationController::class, 'update']);

Route::get('/association/remove/{association}',[AssociationController::class, 'destroy']);