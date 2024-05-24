<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::get('logout', function () {
    return view('');
});

Route::get('catalog', function () {
    return view('catalog.index');
})->name('index');

Route::get('catalog/show/{id}', function ($id) {
    $view = view('catalog.show')
        ->with('id',$id)
        ->with('nombre','Nombre de la Pelicula')
        ->with('sinopsis','Su Sinopsis');
        return $view;
});

Route::get('catalog/create', function () {
    return view('catalog.create');
})->name('create');

Route::get('catalog/edit/{id}', function ($id) {
    $view = view('catalog.edit')
        ->with('id',$id)
        ->with('nombre','Nombre de la Pelicula')
        ->with('sinopsis','Su Sinopsis');
        return $view;
});
