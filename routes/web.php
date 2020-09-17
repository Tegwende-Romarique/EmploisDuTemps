<?php

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
    return view('welcome');
});


                    // Matiere
Route::get('formulaire-matiere', 'MatieresController@create');
Route::get('liste-matiere', 'MatieresController@index');
Route::post('ajouter-matiere', 'MatieresController@store');


                // Enseignants
Route::get('formulaire-enseignant', 'EnseignantsController@create');
Route::get('liste-enseignant', 'EnseignantsController@index');
Route::post('ajouter-enseignant', 'EnseignantsController@store');

                // Niveau
Route::get('formulaire-niveau', 'NiveausController@create');
Route::get('liste-niveau', 'NiveausController@index');
Route::post('ajouter-niveau', 'NiveausController@store');

                // Programme
Route::get('formulaire-programme', 'ProgrammesController@create');
Route::get('liste-programme', 'ProgrammesController@index');
Route::post('ajouter-programme', 'ProgrammesController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
