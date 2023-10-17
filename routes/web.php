<?php

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
    return view('home');
});

Route::get('/ajouterLivres', function (){
    return view('vues/formLivres');
});

Route::post('postModifierLivres/{id}',
    array(
        'uses' => 'App\Http\Controllers\LivresController@postmodificationlivre',
        'as' => 'postmodifierLivre',
    )
);

Route::get('/listerLivres', [\App\Http\Controllers\LivresController::class, 'listerLivres']);
Route::post('/postLivres', [\App\Http\Controllers\LivresController::class, 'postAjouterLivres']);
Route::get('/modifierLivres/{id}', [\App\Http\Controllers\LivresController::class, 'modifier']);
Route::get('/getLogin', [\App\Http\Controllers\VisiteurController::class, 'getLogin']);
Route::post('/login', [\App\Http\Controllers\VisiteurController::class, 'signIn']);
Route::get('/getLogout', [\App\Http\Controllers\VisiteurController::class, 'signOut']);
