<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json(['msg' => 'App works!']);
});
