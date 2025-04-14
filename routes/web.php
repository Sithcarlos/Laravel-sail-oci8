<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// test db connection
Route::get('/db_test', function () {
    return DB::table('dual')->selectRaw('3+0.14159265359 as PI')->get();
});