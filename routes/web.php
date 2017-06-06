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

Route::get('/', 'defaultController@index')->name('index');

Route::get('panden','pandController@index');
Route::get('panden/foto/{pandId}','pandController@getPandfoto');
Route::get('panden/fotos/{pandId}','pandController@getAllfoto');
Route::get('panden/overzicht', 'pandController@getAllpands')->name('allePanden');
Route::post('panden/zoek', 'pandController@searchPands');
Route::get('info', 'pandController@getInfo');
Route::get('voorwaarden', 'defaultController@getVoorwaarden')->name('voorwaarden');
Route::get('wachtwoordreset', 'defaultController@getPassswordreset');
Route::post('wachtwoordreset', 'defaultController@postPassswordreset');


//route voor het registeren van de huurder en verhuurder
Route::get('huurder/registratie', 'huurderController@index')->name('huurderRegisteren');
Route::post('huurder/registeren', 'huurderController@register');
route::get('verhuurder/registratie', 'verhuurderController@index')->name('verhuurderRegisteren');
route::post('verhuurder/registeren', 'verhuurderController@register');

//voor het inloggen en uitloggen van de huurder en verhuurder
Route::get('huurder/inloggen', 'huurderController@showLogin')->name('huurderInloggen');
Route::post('huurder/inloggen', 'huurderController@doLogin');
Route::get('huurder/uitloggen', 'huurderController@doLogout')->name('huurderUitloggen');
Route::get('verhuurder/inloggen', 'verhuurderController@showLogin');
Route::post('verhuurder/inloggen', 'verhuurderController@doLogin')->name('verhuurderInloggen');;
Route::get('verhuurder/uitloggen', 'verhuurderController@doLogout')->name('verhuurderUitloggen');

// route voor het tonen van het profiel van de huurder en verhuurder
Route::get('huurder/profiel', 'huurderController@showProfile')->name('huurderProfiel')->middleware('authHuurder');
Route::get('verhuurder/profiel', 'verhuurderController@showProfile')->name('verhuurderProfiel')->middleware('authVerhuurder');

//Route die de pagina toont voor het toevoegen van een pand
Route::get('pand/toevoegen', 'pandController@showAddpand')->middleware('authVerhuurder');
Route::post('pand/toevoegen', 'pandController@addPand')->middleware('authVerhuurder');

//Route's voor het bewerken van het pand
Route::get('pand/{pandId}/bewerk','pandController@showEditpand')->middleware('authVerhuurder');
Route::post('pand/{pandId}/bewerk','pandController@Editpand')->middleware('authVerhuurder');

//Route's voor het deleten
Route::get('pand/{pandId}/verwijder','pandController@deletePand')->middleware('authVerhuurder');
Route::get('huurder/{pandId}/verwijder/intresse','pandController@deleteLike')->middleware('authHuurder');

//Route voor het intereseren van een pand
Route::get('pand/{pandId}/like', 'pandController@likePand')->middleware('authHuurder');

// Route voor het ophalen van alle info van een pand
Route::get('pand/{pandId}/info', 'pandController@Infopand')->name('pandInfo');

// Route die alle likes toont van een huurder
Route::get('huurder/intresses', 'huurderController@overviewLikes')->name('huurderIntresse')->middleware('authHuurder');

// route voor het maken van een huurafspraak
Route::post('pand/{pandId}/huurafspraak', 'huurderController@pandHuurafspraak')->middleware('authHuurder');

// route voor het versturen van een vraag
Route::post('pand/{pandId}/stelvraag', 'pandController@postStelvraag');

// route voor het ophalen van alle huurafspraken van een verhuurder
Route::get('verhuurder/huurafspraken', 'verhuurderController@overviewHuuraspraken')->middleware('authVerhuurder');
Route::get('verhuurder/accepteer/huurafspraak/{huurder_ID}/{pandId}','verhuurderController@acceptHuurafspraak')->middleware('authVerhuurder');
Route::get('verhuurder/verwijderen/huurafspraak/{huurder_ID}/{pandId}','verhuurderController@deleteHuurafspraak')->middleware('authVerhuurder');
Route::get('verhuurder/afwijzen/huurafspraak/{huurder_ID}/{pandId}','verhuurderController@showdeclineHuurafspraak')->middleware('authVerhuurder');
Route::post('verhuurder/afwijzen/huurafspraak/{huurder_ID}/{pandId}','verhuurderController@declineHuurafspraak')->middleware('authVerhuurder');

// route voor het tonen van een map met alle panden
Route::get('map','pandController@pandMaps');

//Route die alle panden toont van een verhuurder
Route::get('verhuurder/panden', 'verhuurderController@overviewPanden')->middleware('authVerhuurder');



