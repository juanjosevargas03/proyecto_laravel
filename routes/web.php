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



Route::get('mensajes.msj_rechazado', function () {
    return view('mensajes.msj_rechazado');
});








Route::group(['middleware' => 'guest'], function () {
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login')->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'PersonasController@index')->name('home');
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');


});



Route::group(['middleware' => 'usuarioAdmin'], function () {

    Route::get('form', 'PersonasController@create');
    Route::post('pdf_persona','PersonasController@pdf')->name('pdf_persona');
    Route::get('reporte', 'PersonasController@report')->name('reporte');
     
    Route::resource('personas', 'PersonasController');


     Route::get('create_convenios', 'ConveniosController@create');
     Route::post('show_convenio','ConveniosController@show')->name('show_convenio');
     Route::post('pdf_convenio','ConveniosController@pdf')->name('pdf_convenio');
     Route::delete('delete_convenio','ConveniosController@destroy')->name('delete_convenio');
 Route::post('edit_convenio','ConveniosController@edit')->name('edit_convenio');
     Route::patch('update_convenios','ConveniosController@update')->name('update_convenios');

    Route::get('create_redes', 'redesController@create');
     Route::post('show_redes','redesController@show')->name('show_redes');
     Route::delete('delete_redes','redesController@destroy')->name('delete_redes');
 Route::post('edit_redes','redesController@edit')->name('edit_redes');
     Route::patch('update_redes','redesController@update')->name('update_redes');

      Route::get('create_curriculos', 'curriculosController@create');
     Route::post('show_curriculos','curriculosController@show')->name('show_curriculos');
     Route::delete('delete_curriculos','curriculosController@destroy')->name('delete_curriculos');
 Route::post('edit_curriculos','curriculosController@edit')->name('edit_curriculos');
     Route::patch('update_curriculos','curriculosController@update')->name('update_curriculos');

    Route::resource('redes', 'redesController');
    Route::resource('curriculos', 'curriculosController');
    Route::resource('convenios', 'ConveniosController');

    Route::get('chart', 'ChartController@index');

    Route::get('chart_conv', 'ChartController@chart_conv');
    Route::get('chart_redes', 'ChartController@chart_redes');

    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register')->name('register');
    

    Route::get('cargar', function () {
        return view('cargar_personas');
    });
    
     Route::get('cargar_convenios', function () {
        return view('convenios.cargar_convenios');
    });

     Route::get('cargar_redes', function () {
        return view('redes.cargar_redes');
    });
      Route::get('cargar_curr', function () {
        return view('curriculos.cargar_curr');
    });
    
    Route::post('/import', 'CargarController@import');
    Route::post('import_conv', 'CargarController@import_conv')->name('import_conv');
    Route::post('import_curr', 'CargarController@import_curr')->name('import_curr');
    Route::post('import_redes', 'CargarController@import_redes')->name('import_redes');
});







