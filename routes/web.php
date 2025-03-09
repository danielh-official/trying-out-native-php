<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/customers/1', function () {
    echo \Illuminate\Support\Facades\DB::table('customers')->first()->first_name;
})->name('customers.1');
