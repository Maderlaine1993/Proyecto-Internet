<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\RolController;
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
    return view('inicio');
});

/* Routes de Rol*/
Route::get('/read/rol',  [RolController::class, 'readRol'])->name('readRol')->middleware('auth');//Ruta para la vista de la tabal rol
Route::get('/createRol', [RolController::class, 'createRol'])->name('createRol')->middleware('auth');//Ruta para visualizar formulario
Route::post('/rol/createRol', [RolController::class, 'saveRol'])->name('rol.saveRol')->middleware('auth');//Ruta para guardar el formulario
Route::get('/rol/edit/{id_rol}',  [RolController::class, 'editRol'])->name('editRol')->middleware('auth'); //Ruta para visualizar formulario de edicion
Route::patch('/rol/update/{id_rol}',[RolController::class, 'updateRol'])->name('updateRol')->middleware('auth');//Ruta para guardar la edicion
Route::delete('delaterol/{id_rol}', [RolController::class,'deleteRol'])->name('deleteRol')->middleware('auth'); //Ruta para eliminar un registro

/* Routes de Paquete*/
Route::get('/read/paquete',  [PaqueteController::class, 'readPaquete'])->name('readPaquete')->middleware('auth');//Ruta para la vista de la tabal paquete
Route::get('/createPaquete', [PaqueteController::class, 'createPaquete'])->name('createPaquete')->middleware('auth');//Ruta para visualizar formulario
Route::post('/paquete/createPaquete', [PaqueteController::class, 'savePaquete'])->name('paquete.savePaquete')->middleware('auth');//Ruta para guardar el formulario
Route::get('/paquete/edit/{codigo}',  [PaqueteController::class, 'editPaquete'])->name('editPaquete')->middleware('auth'); //Ruta para visualizar formulario de edicion
Route::patch('/paquete/update/{codigo}',[PaqueteController::class, 'updatePaquete'])->name('updatePaquete')->middleware('auth');//Ruta para guardar la edicion
Route::delete('delatePaquete/{codigo}', [PaqueteController::class,'deletePaquete'])->name('deletePaquete')->middleware('auth'); //Ruta para eliminar un registro

/* Routes de clientes*/
Route::get('/read/cliente',  [ClienteController::class, 'readCliente'])->name('readCliente')->middleware('auth');//Ruta para la vista de la tabal paquete
Route::get('/createCliente', [ClienteController::class, 'createCliente'])->name('createCliente')->middleware('auth');//Ruta para visualizar formulario
Route::post('/cliente/createCliente', [ClienteController::class, 'saveCliente'])->name('cliente.saveCliente')->middleware('auth');//Ruta para guardar el formulario
Route::get('/cliente/edit/{nit}',  [ClienteController::class, 'editCliente'])->name('editCliente')->middleware('auth'); //Ruta para visualizar formulario de edicion
Route::patch('/cliente/update/{nit}',[ClienteController::class, 'updateCliente'])->name('updateCliente')->middleware('auth');//Ruta para guardar la edicion
Route::delete('delateCliente/{nit}', [ClienteController::class,'deleteCliente'])->name('deleteCliente')->middleware('auth'); //Ruta para eliminar un registro

/* Routes de Factura*/
Route::get('/read/factura',  [FacturaController::class, 'readFactura'])->name('readFactura')->middleware('auth');//Ruta para la vista de la tabla de Factura
Route::get('/createFactura', [FacturaController::class, 'createFactura'])->name('createFactura')->middleware('auth');//Ruta para visualizar formulario
Route::post('/factura/createFactura', [FacturaController::class, 'saveFactura'])->name('factura.saveFactura')->middleware('auth');//Ruta para guardar el formulario
Route::delete('delateFactura/{no_factura}', [FacturaController::class,'deleteFactura'])->name('deleteFactura')->middleware('auth'); //Ruta para eliminar un registro

/*Ruta de clientes*/
Route::get('/loginCliente', [FacturaController::class, 'loginCliente'])->name('/loginCliente');//Ruta para la vista de login de cliente
Route::post('/session', [FacturaController::class, 'session'])->name('session');//Ruta de logiarse
Route::get('/homeCliente', [FacturaController::class, 'indexCliente'])->name('home'); //Ruta del cliente
Route::get('/cancelar', [FacturaController::class, 'cancelar'])->name('cancelar'); //Ruta de cancelar
Route::get('/pago',[FacturaController::class, 'pago'])->name('pago');//Ruta de pago

/* Routes de Contrato*/
Route::get('/read/contrato',  [ContratoController::class, 'readContrato'])->name('readContrato')->middleware('auth');//Ruta para la vista de la tabla de Factura
Route::get('/createContrato', [ContratoController::class, 'createContrato'])->name('createContrato')->middleware('auth');//Ruta para visualizar formulario
Route::post('/contrato/createContrato', [ContratoController::class, 'saveContrato'])->name('contrato.saveContrato')->middleware('auth');//Ruta para guardar el formulario
Route::delete('delateContrato/{id}', [ContratoController::class,'deleteContrato'])->name('deleteContrato')->middleware('auth'); //Ruta para eliminar un registro

Auth::routes();

/*Routes de generales*/
Route::get('/inicio', [HomeController::class, 'inicio'])->name('inicio'); //Ruta de la vista general
Route::get('/home', [HomeController::class, 'index'])->name('home'); //Ruta del trabajador




