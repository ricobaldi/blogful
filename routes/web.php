<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@home')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/blog-post/{id}', 'HomeController@blogPost')->name('blog-post');