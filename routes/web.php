<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

Route::get('/', function () {
    return redirect()->route('songs.index');
});

Route::resource('songs', SongController::class);
