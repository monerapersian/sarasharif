<?php

use Illuminate\Support\Facades\Route;

Route::view('/blogs', 'pages.blog.index')->name('blog.index');
Route::view('/blog/single', 'pages.blog.single')->name('blog.single');
// Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::view('/calculator', 'pages.calculator.index')->name('calculator.index');
Route::view('/about', 'pages.about.index')->name('about.index');
Route::view('/contact', 'pages.contact.index')->name('contact.index');
Route::view('/faq', 'pages.faq.index')->name('faq.index');
Route::view('/404-preview', 'pages.404.index')->name('404.preview');

Route::get('/', function () {
    return view('pages.home');
});
