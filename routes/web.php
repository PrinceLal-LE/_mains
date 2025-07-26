<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\ProjectController;
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


// Add this route temporarily to clear the cache
Route::get('/clear-cache', function() {
    Artisan::call('config:clear');
    return "Configuration cache cleared!";
});

// Route::get('/projects/{type}', [ProjectController::class, 'index'])->name('projects.index');
// Replace with these specific project routes
Route::get('/project/residential', [ProjectController::class, 'index'])->name('project.residential')->defaults('type', 'residential');
Route::get('/project/commercial', [ProjectController::class, 'index'])->name('project.commercial')->defaults('type', 'commercial');
Route::get('/project/other', [ProjectController::class, 'index'])->name('project.other')->defaults('type', 'other');

// You can keep this as a fallback if needed
Route::get('/projects/{type}', [ProjectController::class, 'index'])->name('projects.index');
