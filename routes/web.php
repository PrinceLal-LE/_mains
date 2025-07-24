<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Frontend.index');
})->name('index');
Route::get('/about', function () {
    return view('Frontend.about');
})->name('about');
Route::get('/services', function () {
    return view('Frontend.services');
})->name('services');
Route::get('/contact', function () {
    return view('Frontend.contact');
})->name('contact');
Route::get('/career', function () {
    return view('Frontend.career');
})->name('career');
Route::get('/project', function () {
    return view('Frontend.project');
})->name('project');
