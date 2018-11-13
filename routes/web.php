<?php

Route::get('/', function () {
    return view('home');
});

Route::get('login', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');
/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth']], function() {
    Route::get('/', ['uses'=>'DashboardController@index', 'as'=>'dash']);
    Route::resource('categories', 'CategoriesController');
    Route::resource('empresas', 'EmpresasController');
    Route::resource('clientes', 'ClientesController');
    Route::resource('divipola', 'divipolaController');
    Route::resource('habitos', 'habitosController');
    Route::resource('ocupaciones', 'ocupacionesController');
    Route::resource('especialidades', 'especialidadesController');
    Route::resource('tipoexamenes', 'tipoexamenesController');
    Route::resource('expuestoas', 'expuestoasController');
    Route::resource('tiposervicios', 'tiposerviciosController');    
    Route::resource('examenenfasis', 'examenenfasisController'); 
    Route::resource('AgendaSemanales', 'antecedenteshabitosController');
    Route::resource('antecedenteshabitos', 'antecedenteshabitosController');
    Route::resource('antecedentesclinicos', 'antecedentesclinicosController');
    Route::resource('entidades', 'EntidadesController');
    Route::resource('anteceexposionriegos', 'anteceexposionriegosController');
    Route::resource('antecedenteslaborareles', 'AntecedentesLabController');
    Route::resource('antecedentesaccidentesenfermes', 'antecedentesaccidentesenfermesController');
    Route::resource('antecedentesfamiliares', 'antecedentesfamiliaresController');
    Route::resource('antecedentesaccidentestrab', 'antecedentesaccidentestrabController');   
    Route::resource('antecedentesginecoostetricos', 'antecedentesginecoostetricosController');
    Route::resource('antecerevisionsistemas', 'antecerevisionsistemasController');
    Route::resource('examenosteoarticulares', 'examenosteoarticularesController');
    Route::resource('profesionales', 'ProfesionalesController');  
    Route::resource('examenfisicos', 'examenfisicosController');
    Route::resource('admisiones', 'admisionesController');
    Route::resource('subirexceladmisiones', 'importadmisionesController'); 
    Route::post('importexceladmisiones', 'importadmisionesController@importexceladmisiones')->name('ruta.import.excadmin');  
    Route::resource('users', 'UsersController')->middleware('Role:Superadmin|Admin');
    Route::get('profileedit/{id}', 'ProfileController@edit');
    Route::put('profileupdate/{id}', 'ProfileController@update');
});
