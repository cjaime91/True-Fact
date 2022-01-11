<?php

use App\Http\Controllers\AgentesController;
use App\Http\Controllers\CarteraController;
use App\Http\Controllers\FacturasController;
use App\Http\Controllers\ReferenciasController;
use App\Http\Controllers\ReportesController;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Agentes', [AgentesController::class, 'index'])->name('Agentes');
Route::get('/Facturas', [FacturasController::class, 'index'])->name('Facturas');
Route::get('/Cartera', [CarteraController::class, 'index'])->name('Cartera');
Route::get('/Referencias', [ReferenciasController::class, 'index'])->name('Referencias');
Route::get('/Reportes', [ReportesController::class, 'index'])->name('Reportes');
