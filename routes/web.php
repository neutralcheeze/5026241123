<?php

use App\Http\Controllers\DosenController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/grid', function () {
    return view('grid');
})->name('grid.index');

Route::get('/intro', function () {
    return view('intro');
})->name('intro.index');

Route::get('/news', function () {
    return view('news');
})->name('news.index');

Route::get('/responsive', function () {
    return view('responsive');
})->name('responsive.index');

Route::get('/template', function () {
    return view('template');
})->name('template.index');

Route::get('/tooltip', function () {
    return view('tooltip');
})->name('tooltip.index');

Route::get('/menu', function () {
    return view('menu');
})->name('menu.index');

Route::get('/blog', function () {
    return view('blog');
})->name('blog.index');


Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');
Route::get('/biodata', [DosenCOntroller::class, 'biodata'])->name('dosen.biodata');

