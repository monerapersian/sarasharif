<?php

use Illuminate\Support\Facades\Route;

Route::view('/blogs', 'pages.blog.index')->name('blog.index');
Route::get('/', function () {
    return view('pages.home');
});
