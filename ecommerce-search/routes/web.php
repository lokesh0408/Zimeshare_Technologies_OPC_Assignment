<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;

Route::get('/search', [SearchController::class, 'search']);

Route::get('/', function () {
    return view('search');
});

