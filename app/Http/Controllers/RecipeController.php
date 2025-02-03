<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\JsonResponse;

class RecipeController extends Controller
{
    /**
     * Get all recipes.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        try {
            $recipes = Recipe::all();
            return response()->json($recipes);
        } catch (\Exception $e) {
            Log::error('Error fetching recipes: ' . $e->getMessage());
            return response()->json(['message' => 'An error occurred while fetching recipes.'], 500);
        }
    }

    /**
     * Get a single recipe by ID.
     *
     * @param Recipe $recipe
     * @return JsonResponse
     */
    public function show(Recipe $recipe): JsonResponse
    {
        try {
            return response()->json($recipe);
        } catch (\Exception $e) {
            Log::error('Error fetching recipe: ' . $e->getMessage());
            return response()->json(['message' => 'An error occurred while fetching the recipe.'], 500);
        }
    }

    /**
     * Create a new recipe.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'ingredients' => 'required|string',
            'steps' => 'required|string',
        ]);

        try {
            $recipe = Recipe::create($validated);
            return response()->json($recipe, 201);
        } catch (\Exception $e) {
            Log::error('Error creating recipe: ' . $e->getMessage());
            return response()->json(['message' => 'An error occurred while creating the recipe.'], 500);
        }
    }

    /**
     * Update an existing recipe.
     *
     * @param Request $request
     * @param Recipe $recipe
     * @return JsonResponse
     */
    public function update(Request $request, Recipe $recipe): JsonResponse
    {
        $validated = $request->validate([
            'title' => 'sometimes|string|max:255',
            'ingredients' => 'sometimes|string',
            'steps' => 'sometimes|string',
        ]);

        try {
            $recipe->update($validated);
            return response()->json($recipe);
        } catch (\Exception $e) {
            Log::error('Error updating recipe: ' . $e->getMessage());
            return response()->json(['message' => 'An error occurred while updating the recipe.'], 500);
        }
    }

    /**
     * Delete a recipe.
     *
     * @param Recipe $recipe
     * @return JsonResponse
     */
    public function destroy(Recipe $recipe): JsonResponse
    {
        try {
            $recipe->delete();
            return response()->json(['message' => 'Recipe deleted successfully.']);
        } catch (\Exception $e) {
            Log::error('Error deleting recipe: ' . $e->getMessage());
            return response()->json(['message' => 'An error occurred while deleting the recipe.'], 500);
        }
    }
}
