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

    return view('home', ["comics"=>$data]);
});
////////////////////////////////////////////////
Route::get('/home', function () {
    $data = config("store");

    return view('home', ["comics"=>$data]);
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
});