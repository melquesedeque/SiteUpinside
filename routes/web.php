<?php

Route::get('/', function () {
    return view('site.home');
})->name('site.home');

Route::get('/cursos', function () {
    return view('site.cursos');
})->name('site.cursos');

Route::get('/contato', function () {
    return view('site.contato');
})->name('site.contato');
