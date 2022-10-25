<?php

use App\Http\Controllers\CarteController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\StripeController;
use App\Models\Location;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VeloController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\MagasinController;
use App\Http\Controllers\ModelVeloController;
use App\Http\Controllers\BaladeController;
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\ParticipationController;
use App\Models\Velo;


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
    $velos = Velo::all();
    return view('front.index',compact('velos'));
});

Route::get('/about', function () {
    return view('front.about');
});
Route::get('/contact', function () {
    return view('front.contact');
});
Route::get('/cycle', function () {
    $velos = Velo::all();
    return view('front.cycle',compact('velos'));
});
Route::get('/viewdeail/{schoolId}', 'ViewController@details')->name('schooldetail');

Route::get('/reservation/{idVelo}', function ($idVelo) {
    $velo = Velo::find($idVelo);
    //dd($velo );
    return view('location.front',compact('velo'));
});
/*Carte*/
Route::get('/carte',[CarteController::class, 'index'])->middleware('auth');
Route::get('/carte/cancel/{location}',[CarteController::class, 'cancel'])->middleware('auth');

/*Front reservation*/
Route::post('/reservation/store/{idVelo}',[LocationController::class, 'storeFront'])->middleware('auth');
/* Velo*/
Route::get('/velo',[VeloController::class, 'index'])->middleware('auth');
Route::get('/velo/add',[VeloController::class, 'create'])->middleware('auth');
Route::post('/velo/store',[VeloController::class, 'store'])->middleware('auth');
Route::get('/editvelo/{velo}',[VeloController::class, 'edit'])->middleware('auth');
Route::post('/updatevelo/{velo}',[VeloController::class, 'update'])->middleware('auth');
Route::get('/velo/remove/{velo}',[VeloController::class, 'destroy'])->middleware('auth');
Route::get('/velo/export',[VeloController::class, 'export']);
Route::get('/velo/export_pdf',[VeloController::class, 'export_pdf']);
/*balades*/
Route::get('/balades',[BaladeController::class, 'index'])->middleware('auth');
Route::get('/balades/add',[BaladeController::class, 'create'])->middleware('auth');
Route::post('/balades/store',[BaladeController::class, 'store'])->middleware('auth');
Route::get('/editbalade/{balade}',[BaladeController::class, 'edit'])->middleware('auth');
Route::post('/updatebalade/{balade}',[BaladeController::class, 'update'])->middleware('auth');
Route::get('/balades/remove/{balade}',[BaladeController::class, 'destroy'])->middleware('auth');
Route::get('/baladesFront',[BaladeController::class, 'indexFront']);
/*Event*/
Route::get('/evenements',[EvenementController::class, 'index'])->middleware('auth');
Route::get('/evenements/add',[EvenementController::class, 'create'])->middleware('auth');
Route::post('/evenements/store',[EvenementController::class, 'store'])->middleware('auth');
Route::get('/editevenement/{evenement}',[EvenementController::class, 'edit'])->middleware('auth');
Route::post('/updateevenement/{evenement}',[EvenementController::class, 'update'])->middleware('auth');
Route::get('/evenement/remove/{evenement}',[EvenementController::class, 'destroy'])->middleware('auth');
Route::get('/events',[EvenementController::class, 'list']);
Route::post('/participation/store',[ParticipationController::class, 'store']);
Route::get('/participer/{evenement}',[ParticipationController::class, 'create']);
Route::get('/participations',[ParticipationController::class, 'index']);
Route::get('/participation/remove/{participation}',[ParticipationController::class, 'destroy']);
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
Route::get('/news',[\App\Http\Controllers\PostController::class, 'index']);
/* magasins */
Route::get('/magasins',[MagasinController::class, 'index']);
Route::get('/magasins/add',[MagasinController::class, 'create']);
Route::post('/magasins/store',[MagasinController::class, 'store']);
Route::get('/editmagasin/{magasin}',[MagasinController::class, 'edit']);
Route::post('/updatemagasin/{magasin}',[MagasinController::class, 'update']);
Route::get('/magasins/remove/{magasin}',[MagasinController::class, 'destroy']);
/* models */
Route::get('/models',[ModelVeloController::class, 'index']);
Route::get('/models/add',[ModelVeloController::class, 'create']);
Route::post('/models/store',[ModelVeloController::class, 'store']);
Route::get('/editmodel/{model_Velo}',[ModelVeloController::class, 'edit']);
Route::post('/updatemodel/{model_Velo}',[ModelVeloController::class, 'update']);
Route::get('/models/remove/{model_Velo}',[ModelVeloController::class, 'destroy']);
Route::get('/models/export',[ModelVeloController::class, 'export']);


/* programmes*/
Route::get('/programmes',[ProgrammeController::class, 'index']);
Route::get('/programmes/add',[ProgrammeController::class, 'create']);
Route::post('/programmes/store',[ProgrammeController::class, 'store']);
Route::get('/editprogramme/{programme}',[ProgrammeController::class, 'edit']);
Route::post('/updateprogramme/{programme}',[ProgrammeController::class, 'update']);
Route::get('/programmes/remove/{programme}',[ProgrammeController::class, 'destroy']);


//association

Route::get('/association',[AssociationController::class, 'index']);
Route::get('/association/add',[AssociationController::class, 'create']);
Route::post('/association/store',[AssociationController::class, 'store']);
Route::get('/editassociation/{association}',[AssociationController::class, 'edit']);
Route::post('/updateAssocaiton/{association}',[AssociationController::class, 'update']);
Route::get('/association/remove/{association}',[AssociationController::class, 'destroy']);
Route::get('/associationaddMember/{association}',[AssociationController::class, 'ShowMembersList'])->name("searchUserAssociation");
Route::get('/SearchMembers/{association}',[AssociationController::class, 'SearchMembersFilter'])->name("SearchMembersFilter");
Route::get('/addSelectedUserToAssociation/{association}/{user_id}',[AssociationController::class, 'addSelectedUserToAssociation']);
Route::get('/listUsersPerAsssociation/{association}',[AssociationController::class, 'listUsersPerAsssociation']);

//posts
Route::get('/postadd/{association}',[\App\Http\Controllers\PostController::class, 'create']);
Route::post('/poststore/{association}',[\App\Http\Controllers\PostController::class, 'store']);

/*
 * Stripe
 * */
Route::get('stripe', [StripeController::class, 'stripe']);
Route::post('stripe', [StripeController::class, 'stripePost'])->name('stripe.post');

