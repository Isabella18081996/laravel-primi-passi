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
/* inseriamo lo slash per uindicare che la pagina da noi richiamata è la home del nostro sito. Per le pagine successive quando avverrà il richiamo bisognerà dare /'Nome della pagina' senza '.blade.php' */
Route::get('/', function () {

    $data = [
        'name'=>'Isabella',
        'lastname'=>'Nita',
        'scarpe' => [
            'nike',
            'fila',
            'puma',
            'adidas'
        ]
    ];
    /* se sia ggiungono dati alla pagina bisogna ricordarsi di metterli nel return */
    return view('home',$data);
});
Route::get('/nike', function () {
    return view('nike');
});
Route::get('/fila', function () {
    return view('fila');
});
Route::get('/puma', function () {
    return view('puma');
});
Route::get('/adidas', function () {
    return view('adidas');
});
