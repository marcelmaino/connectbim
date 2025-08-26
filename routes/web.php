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

Route::prefix('/')->name('site.')->group(function () {
    Route::get('/', 'SiteController@index')->name('index');
    Route::get('/obras', 'SiteController@obras')->name('obras');
    Route::get('/obra/{slug}', 'SiteController@obra')->name('obra');
    Route::get('/empresa', 'SiteController@empresa')->name('empresa');
    Route::get('/contato', 'SiteController@contato')->name('contato');
    Route::get('/politica-de-privacidade', 'SiteController@politicadePrivacidade')->name('politica-de-privacidade');
    Route::get('/termos-de-uso', 'SiteController@termosUso')->name('termos-de-uso');
    Route::post('/envia-contato', 'SiteController@enviaContato')->name('envia-contato');
    Route::get('/trabalhe-conosco', 'SiteController@trabalheConosco')->name('trabalhe-conosco');
    Route::post('/envia-trabalhe', 'SiteController@enviaTrabalhe')->name('envia-trabalhe');
    Route::get('/sucesso-contato', 'SiteController@sucesso')->name('sucesso-contato');
    Route::get('/construcoes-horizontais', 'SiteController@construcoesHorizontais')->name('construcoes-horizontais');
    Route::get('/multiandares', 'SiteController@multiandares')->name('multiandares');
    Route::get('/projetos-especiais', 'SiteController@projetosEspeciais')->name('projetos-especiais');
    Route::get('/estruturas-de-processo', 'SiteController@estruturasProcesso')->name('estruturas-de-processo');
    Route::get('/infraestrutura', 'SiteController@infraestrutura')->name('infraestrutura');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
