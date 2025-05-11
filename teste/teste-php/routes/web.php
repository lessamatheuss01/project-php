<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = "Matheus";

    return view('welcome', ['nome' => $nome]);
});
