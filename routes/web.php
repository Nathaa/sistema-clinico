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

Route::get('/', function () {
    return view('welcome');
});

//rura par login, contraseña etc
Auth::routes();

//ruta protegida solo se se entra el inisiar sesion
Route::get('/home', 'HomeController@index')->name('home');

//ruta protegida solo se se entra el inisiar sesion
Route::get('/home2', 'Home2Controller@index')->name('home2');
Route::get('/evento/get', 'Home2Controller@get_events');
Route::post('/evento/create', 'Home2Controller@create_events');
//Routes

//verifica si estas autentificado
Route::middleware(['auth'])->group(function () {
    //roles
    //lista de un formulario crud

    Route::post('roles/store', 'RoleController@store')->name('roles.store')
 ->middleware('permission:roles.create');

    Route::get('roles', 'RoleController@index')->name('roles.index')
 ->middleware('permission:roles.index');

    Route::get('roles/create', 'RoleController@create')->name('roles.create')
 ->middleware('permission:roles.create');

    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
 ->middleware('permission:roles.update');

    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
 ->middleware('permission:roles.show');

    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
 ->middleware('permission:roles.destroy');

    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
 ->middleware('permission:roles.edit');

    // expedientes

    Route::post('expedientes/store', 'ExpedienteController@store')->name('expedientes.store')
 ->middleware('permission:expedientes.create');

    Route::get('expedientes', 'ExpedienteController@index')->name('expedientes.index')
 ->middleware('permission:expedientes.index');

    Route::get('expedientes/create', 'ExpedienteController@create')->name('expedientes.create')
 ->middleware('permission:expedientes.create');

    Route::put('expedientes/{expediente}', 'ExpedienteController@update')->name('expedientes.update')
 ->middleware('permission:expedientes.update');

    Route::get('expedientes/{expediente}/citas', 'ExpedienteController@showCitas')->name('expedientes.showCitas')
 ->middleware('permission:expedientes.showCitas');

    Route::get('expedientes/{expediente}/cuentas', 'ExpedienteController@showCuentas')->name('expedientes.showCuentas')
 ->middleware('permission:expedientes.showCuentas');

    Route::get('expedientes/{expediente}', 'ExpedienteController@show')->name('expedientes.show')
 ->middleware('permission:expedientes.show');

    Route::delete('expedientes/{expediente}', 'ExpedienteController@destroy')->name('expedientes.destroy')
 ->middleware('permission:expedientes.destroy');

    Route::get('expedientes/{expediente}/edit', 'ExpedienteController@edit')->name('expedientes.edit')
 ->middleware('permission:expedientes.edit');

    //usuario

    Route::get('users', 'UserController@index')->name('users.index')
 ->middleware('permission:users.index');

    Route::put('users/{user}', 'UserController@update')->name('users.update')
 ->middleware('permission:users.update');

    Route::get('users/{user}', 'UserController@show')->name('users.show')
 ->middleware('permission:users.show');

    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
 ->middleware('permission:users.destroy');

    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
 ->middleware('permission:users.edit');

    // cuentas

    Route::post('cuentas/store', 'CuentaController@store')->name('cuentas.store')
    ->middleware('permission:cuentas.create');

    Route::get('cuentas', 'CuentaController@index')->name('cuentas.index')
    ->middleware('permission:cuentas.index');

    Route::get('cuentas/create', 'CuentaController@create')->name('cuentas.create')
    ->middleware('permission:cuentas.create');

    Route::put('cuentas/{cuenta}', 'CuentaController@update')->name('cuentas.update')
    ->middleware('permission:cuentas.update');

    Route::get('cuentas/{cuenta}', 'CuentaController@show')->name('cuentas.show')
    ->middleware('permission:cuentas.show');

    Route::delete('cuentas/{cuenta}', 'CuentaController@destroy')->name('cuentas.destroy')
    ->middleware('permission:cuentas.destroy');

    Route::get('cuentas/{cuenta}/edit', 'CuentaController@edit')->name('cuentas.edit')
    ->middleware('permission:cuentas.edit');

    //citas

    Route::post('citas/store', 'CitaController@store')->name('citas.store')
    ->middleware('permission:citas.create');

    Route::get('citas', 'CitaController@index')->name('citas.index')
    ->middleware('permission:citas.index');

    Route::get('citas/create', 'CitaController@create')->name('citas.create')
    ->middleware('permission:citas.create');

    Route::put('citas/{cita}', 'CitaController@update')->name('citas.update')
    ->middleware('permission:citas.update');

    Route::get('citas/{cita}', 'CitaController@show')->name('citas.show')
    ->middleware('permission:citas.show');

    Route::delete('citas/{cita}', 'CitaController@destroy')->name('citas.destroy')
    ->middleware('permission:citas.destroy');

    Route::get('citas/{cita}/edit', 'CitaController@edit')->name('citas.edit')
    ->middleware('permission:citas.edit');

    //Consultas de pagos por fechas

    Route::get('consultaPagos', 'ConsultaPagoController@index')->name('consultaPagos.index')
    ->middleware('permission:consultaPagos.index');

    Route::get('consultaPagos/create', 'ConsultaPagoController@create')->name('consultaPagos.create')
    ->middleware('permission:consultaPagos.create');

    Route::post('consultaPagos/store', 'ConsultaPagoController@store')->name('consultaPagos.store')
    ->middleware('permission:consultaPagos.create');

    Route::get('consultaPagos/{consultaspagos}', 'ConsultaPagoController@show')->name('consultaPagos.show')
    ->middleware('permission:consultaPagos.show');

    Route::delete('consultaPagos/{consultaspagos}', 'ConsultaPagoController@destroy')->name('consultaPagos.destroy')
    ->middleware('permission:consultaPagos.destroy');

    //Consultas de pagos por pacientes

    Route::get('consultaPagoPacientes', 'ConsultaPagosPacienteController@index')->name('consultaPagoPacientes.index')
    ->middleware('permission:consultaPagoPacientes.index');

    Route::post('consultaPagoPacientes/store', 'ConsultaPagosPacienteController@store')->name('consultaPagoPacientes.store')
    ->middleware('permission:consultaPagos.create');

    Route::get('consultaPagoPacientes/{consultaspagospaciente}', 'ConsultaPagosPacienteController@show')->name('consultaPagoPacientes.show')
    ->middleware('permission:consultaPagoPacientes.show');

    Route::delete('consultaPagoPacientes/{consultaspagospaciente}', 'ConsultaPagosPacienteController@destroy')->name('consultaPagoPacientes.destroy')
    ->middleware('permission:consultaPagoPacientes.destroy');
});
