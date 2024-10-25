<?php

use Illuminate\Support\Facades\Route;

// Rute untuk halaman beranda
Route::get('/', function () {
    return view(''); // Ganti dengan view yang sesuai
});

// Rute untuk halaman resep
Route::get('/recipes', 'RecipeController@index')->name('recipes.index');

// Rute untuk melihat detail resep
Route::get('/recipes/{id}', 'RecipeController@show')->name('recipes.show');

// Rute untuk menyimpan resep baru
Route::get('/recipes/create', 'RecipeController@create')->name('recipes.create');
Route::post('/recipes', 'RecipeController@store')->name('recipes.store');

// Rute untuk mengedit resep
Route::get('/recipes/{id}/edit', 'RecipeController@edit')->name('recipes.edit');
Route::put('/recipes/{id}', 'RecipeController@update')->name('recipes.update');

// Rute untuk menghapus resep
Route::delete('/recipes/{id}', 'RecipeController@destroy')->name('recipes.destroy');

// Rute untuk halaman profil pengguna
Route::get('/profile', 'User Controller@show')->name('profile.show');

// Rute untuk halaman pengaturan
Route::get('/settings', 'SettingsController@index')->name('settings.index');
