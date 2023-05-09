<?php

use App\Http\Controllers\HomeController;
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
    return redirect('home');
 });

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/home/{locale?}', [\App\Http\Controllers\HomeController::class, 'index'])->name('home')
->where('locale', 'ca|es|en');

Route::get('/detall/refugi/{refugi}/{locale?}', [App\Http\Controllers\RefugiController::class, 'showRefugi'])
->name('detall.refugi')->where('locale', 'ca|es|en');

Route::get('/llista/{locale?}', [App\Http\Controllers\RefugiController::class, 'show'])
->name('llista')->where('locale', 'ca|es|en');

Route::get('/llistacomarques/{locale?}', [\App\Http\Controllers\ComarcaController::class, 'index'])
->name('llistacomarques')
->where('locale', 'ca|es|en');

Route::get('/llistaentitats/{locale?}', [\App\Http\Controllers\EntitatController::class, 'index'])
->name('llistaentitats')
->where('locale', 'ca|es|en');

Route::get('/buscar/{locale?}', [\App\Http\Controllers\HomeController::class, 'search'])->where('locale', 'ca|es|en');

Route::get('/lang/{idioma}', 'App\Http\Controllers\IdiomaController@index');