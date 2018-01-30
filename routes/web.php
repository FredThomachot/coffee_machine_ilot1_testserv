<?php

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

Route::get('/',"HomeController@welcome");

Route::get('recettes',"RecipeController@liste");
Route::get('listeparprix',"RecipeController@listePrix");
Route::get('listeparnom',"RecipeController@listeNom");
Route::get('listeparid',"RecipeController@listeId");

Route::get('monnayeur', 'MoneyController@liste');

Route::get('ingredients', "IngredientsController@reloaded_delet");

Route::get('ventes', 'OrderController@liste');

Route::get('boisson/{id}', 'RecipeController@showBoisson');
Route::get('update/{id}', 'RecipeController@updateBoisson');

Route::get('ajouteruneboisson', 'RecipeController@addBoisson');
Route::post('ajouteruneboissonBdd', 'UpdateDrinkController@store');

Route::get('suppBoissonBdd/{id}','UpdateDrinkController@destroy');

Route::get('updateBoissonBdd/{id}', 'RecipeController@updateBoisson');
Route::post('updateBoissonBdd/{id}','UpdateDrinkController@update');












