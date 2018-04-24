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

Route::get('/', [
    'as'=>'front.index',
    'uses'=>'BuscarController@index'
]);

//Route::get('rubro/{nombre}',[
//    'uses'=>'BuscarController@searchRubro',
//    'as'=>'front.search.rubro'
//]);

//Route::get('etiqueta/{nombre}',[
//    'uses'=>'BuscarController@searchEtiqueta',
//    'as'=>'front.search.etiqueta'
//]);

Auth::routes();
Route::get('empresa/imagen/{filename}',function($filename){
    $path=public_path("images/$filename");
    if(!\File::exists($path)) abort(404);
    $file=\File::get($path);
    $type=\File::mimeType($path);
    $response=Response::make($file,200);
    $response->header("Content-Type",$type);
    return $response;
});
Route::get('/home', 'HomeController@index');
Route::resource('rubro','RubroController');
Route::resource('etiqueta','EtiquetaController');
Route::get('etiqueta/{id}/destroy',[
    'uses'=>'EtiquetaController@destroy',
    'as'=>'etiqueta.destroy'
    ]);
Route::resource('empresa','EmpresaController');

