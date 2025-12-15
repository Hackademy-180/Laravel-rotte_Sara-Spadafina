<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chi siamo', function () {
    $nomi = ["Matteo", "Maria", "Maryna", "Elisabetta", "Simone"];
    return view('chiSiamo', ["names" => $nomi]);

});
