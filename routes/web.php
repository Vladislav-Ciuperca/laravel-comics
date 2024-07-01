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
    $data = config("store");

    return view('home', ["comics" => $data]);
})->name("home");

////////////////////////////////////////////////

Route::get('/home', function () {
    $data = config("store");

    return view('home', ["comics" => $data]);
});

////////////////////////////////////////////////

Route::get('/prova', function () {

    $msg = "cioa messaggio di prova";
    $description = "description lorem";

    $data = [
        "msg" => $msg,
        "description" => $description,
        "studenti" => [
            "michele",
            "andrea",
            "giacomo",
            "maccpio",
        ]
    ];

    return view('prova', $data);
})->name('prova');

/////////////////////////////////////////////////

Route::get('/about', function () {
    return view('about');
})->name('about');

////////////////////////////////////////////////



///////////////////////////////////////////////

Route::get('/home/{indice}', function ($indice) {

    // return "hai caricato la rotta 'comic-details' passando un indice" ." ". $indice;

    $data = config('store');



    return view('home_specific', ["comics" => $data]);
});
