
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

Route::get('/1', 'vistas_controller@index');

Route::post('/2', 'vistas_controller@getName');

Route::post('/3','vistas_controller@makeBuy');






Route::get('/4','vistas_controller@Buy1');




Route::get('/5','vistas_controller@Buy2');
Route::post('/6','vistas_controller@Buy3');
Route::post('/7','vistas_controller@Buy4');


