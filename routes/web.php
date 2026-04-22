<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/signin', function() {
    return view('signin'); 
})->name('signin.view'); 