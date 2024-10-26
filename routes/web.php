<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

// Home route
Route::get('/', function () {
    return view('welcome'); // You can create a welcome view or redirect to another page
});

// Recipe routes
Route::prefix('recipes')->group(function () {
    // Display all recipes
    Route::get('/', [RecipeController::class, 'index'])->name('recipes.index');

    // Show a single recipe
    Route::get('/{id}', [RecipeController::class, 'show'])->name('recipes.show');

    // Show form to create a new recipe
    Route::get('/create', [RecipeController::class, 'create'])->name('recipes.create');

    // Store a new recipe
    Route::post('/', [RecipeController::class, 'store'])->name('recipes.store');

    // Show form to edit an existing recipe
    Route::get('/{id}/edit', [RecipeController::class, 'edit'])->name('recipes.edit');

    // Update an existing recipe
    Route::put('/{id}', [RecipeController::class, 'update'])->name('recipes.update');

    // Delete a recipe
    Route::delete('/{id}', [RecipeController::class, 'destroy'])->name('recipes.destroy');
    //contrroler
Route::resource('recipes', RecipeController::class);
});