<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@home')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');

Route::resource('/blogposts', 'BlogPostController');
