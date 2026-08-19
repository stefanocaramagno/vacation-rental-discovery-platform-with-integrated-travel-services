<?php

use Illuminate\Support\Facades\Route;

// Route per pagina avvio browser: Home
Route::get('/', function () {
    return redirect('home');
});

// Route per pagine: Autenticazione (Check Email Login, Registrazione)
Route::get('pagina_autenticazione/check_email', 'App\Http\Controllers\AutenticazioneController@getCheckEmailForm');
Route::post('pagina_autenticazione/check_email', 'App\Http\Controllers\AutenticazioneController@doCheckEmail');
Route::get('pagina_autenticazione/registrazione', 'App\Http\Controllers\AutenticazioneController@getRegisterForm');
Route::post('pagina_autenticazione/registrazione', 'App\Http\Controllers\AutenticazioneController@doRegister');
Route::get('pagina_autenticazione/login', 'App\Http\Controllers\AutenticazioneController@getLoginForm');
Route::post('pagina_autenticazione/login', 'App\Http\Controllers\AutenticazioneController@doLogin');
Route::get('pagina_autenticazione/logout', 'App\Http\Controllers\AutenticazioneController@doLogout');
Route::get('utente-loggato', 'App\Http\Controllers\AutenticazioneController@controlloUtenteLoggato');

// Route per pagina: Home
Route::get('home', 'App\Http\Controllers\HomeController@getHome');
Route::post('home', 'App\Http\Controllers\HomeController@getHome');
Route::get('tipologie-alloggio', 'App\Http\Controllers\HomeController@getTipologieAlloggio');
Route::get('immobili', 'App\Http\Controllers\HomeController@getImmobili');

// Route per pagina: Immobile
Route::get('immobile/{id}', 'App\Http\Controllers\ImmobiliController@getImmobile');
Route::get('immobile/informazioni-immobile/{id}', 'App\Http\Controllers\ImmobiliController@getInformazioniImmobile');

// Route per pagina: Affitta
Route::get('affitta', 'App\Http\Controllers\AffittaController@getAffitta');

// Route per pagina: Preferiti Immobili
Route::get('preferiti_immobili', 'App\Http\Controllers\PreferitiImmobiliController@getPreferitiImmobili');
Route::get('lista-immobili-preferiti', 'App\Http\Controllers\PreferitiImmobiliController@getListaImmobiliPreferiti');
Route::get('aggiungi-preferiti-immobili', 'App\Http\Controllers\PreferitiImmobiliController@aggiungiPreferitoImmobile');
Route::get('rimuovi-preferiti-immobili/{immobileId}', 'App\Http\Controllers\PreferitiImmobiliController@rimuoviPreferitoImmobile');

// Route per pagina: Preferiti Brani Musicali
Route::get('preferiti_brani_musicali', 'App\Http\Controllers\PreferitiBraniMusicaliController@getPreferitiBraniMusicali');
Route::get('lista-preferiti-brani-musicali', 'App\Http\Controllers\ApiEsterneController@getListaPreferitiBraniMusicali');
Route::get('aggiungi-preferiti-brani-musicali', 'App\Http\Controllers\ApiEsterneController@aggiungiPreferitoBranoMusicale');
Route::get('rimuovi-preferiti-brani-musicali', 'App\Http\Controllers\ApiEsterneController@rimuoviPreferitoBranoMisucale');

// Route per API Esterne
Route::get('calendario-festivita', 'App\Http\Controllers\ApiEsterneController@fetchCalendarioFestivita');
Route::get('meteo', 'App\Http\Controllers\ApiEsterneController@fetchMeteo');
Route::get('brani-musicali', 'App\Http\Controllers\ApiEsterneController@fetchBraniMusicali');
Route::get('mappa', 'App\Http\Controllers\ApiEsterneController@fetchMappa');