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
    $data = [
        "msg" => "cheddar sauce + BBQ = wow",
        "nomi" => [
            "andrea",
            "luca",
            "giacomo",
            "maccio",
            "gigabue",
            "25 cent",
        ],
        "favColor"=>[
            "giallol",
            "verde",
            "blu",
            "giallol",
            "verde",
            "blu",
        ]
    ];

    return view('home', $data);
});
////////////////////////////////////////////////
Route::get('/home', function () {
    return view('home');
});
////////////////////////////////////////////////
Route::get('/prova', function () {

    $msg = "cioa messaggio di prova";
    $description = "description lorem";

    $data = [
        "msg" => $msg,
        "description" => $description,
        "studenti"=> [
            "michele",
            "andrea",
            "giacomo",
            "maccpio",
        ]
    ];

    return view('prova', $data);
});k