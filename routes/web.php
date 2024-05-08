<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $nom = 'pino';
    $prenom = 'adam';

    return view('home', compact("nom", "prenom"), ['name' => 'sara', 'lastname' => 'pina']);

})->name('home');

Route::get('/second-home', function () {

    $data = [

        'nome' => 'ale',
        'cognome'=> 'sandro'
    ];

    return view('second-home', $data);

})->name('second-home');
