
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

Route::get('/', 'vistas_controller@index');

Route::post('/planes', 'vistas_controller@getName');

Route::post('/planbasico','vistas_controller@makeBuy');
Route::post('/planstandard','vistas_controller@Buy1');
Route::post('/planpremium','vistas_controller@Buy2');
Route::post('/planmega','vistas_controller@Buy3');






