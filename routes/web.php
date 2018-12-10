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

Route::name('language')->get('language/{lang}', 'HomeController@language');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/teams', 'TeamsController');

Route::resource('/user', 'BetController');

//see all matchs
//Route::get('/matchs', 'MatchsController@index');
Route::get('', 'MatchsController@index');

//see all bets for admin
Route::get('/admin/bets', 'BetController@index')->middleware('isAdmin');

//user views
Route::get('/stats/teams', 'StatsController@index');

Route::get('/stats/statByMatch/{id}', 'StatsController@statByMatch');

Route::get('stats/playersByTeam/{id}', 'StatsController@playersByTeam');

Route::get('/user/bet/{id}', 'BetController@createBetForMatch');

Route::get('/user/allBets/{id}', 'BetController@seeBetsOfUser');

// to go to adminteams controller (create team...)
Route::resource('/admin/teams', 'AdminTeamsController')->middleware('isAdmin');

Route::get('/admin/players/playersByTeam/{id}', 'AdminPlayersController@playersByTeam')->middleware('isAdmin');
// to go to adminplayers controller
Route::resource('/admin/players', 'AdminPlayersController')->middleware('isAdmin');

// to go to adminroles controller
Route::resource('/admin/roles', 'AdminRolesController')->middleware('isAdmin');

// to go to adminplayers controller
Route::resource('/admin/placements', 'AdminPlacementsController')->middleware('isAdmin');


Route::get('/admin/stats/addStats/{id}', 'AdminStatsController@createStatsForMatch')->middleware('isAdmin');

Route::get('/admin/stats/statByMatch/{id}', 'AdminStatsController@statByMatch')->middleware('isAdmin');
// to go to adminroles controller
Route::resource('/admin/stats', 'AdminStatsController')->middleware('isAdmin');

// to go to adminroles controller
Route::resource('/admin/matchs', 'AdminMatchsController')->middleware('isAdmin');

//to go to admin controller index
Route::resource('/admin', 'AdminController')->middleware('isAdmin');
