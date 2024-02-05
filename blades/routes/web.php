<?php

use Illuminate\Support\Facades\Route;

Route::view('/','indice')->name('indice');
Route::view('/contacto','contacto')->name('contacto');
Route::view("/about","about")->name("about");
Route::view("/services","services")->name("services");



