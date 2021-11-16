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
use App\Http\Controllers\EventController;

Route::get('/', [EventController::Class, 'index']);

Route::get('/events/create', [EventController::Class, 'create']);

Route::get('/Contato', function () {
    return view('contato');
});
Route::get('/Produtos', function () {
    $busca = request('search');
    return view('produtos', ['busca'=>$busca]);
});
Route::get('/Produto/{id?}', function ($id=null) {
    return view('Produto',['id'=> $id]);
});

