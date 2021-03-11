<?php

namespace App\Http\Controllers;

use App\Repositories\RecipeRepository;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function __construct(RecipeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function show($slug)
    {
        $recipe = $this->repository->forSlug($slug);
        abort_unless($recipe, 404, 'Recipe');

        return view('recipe.show', ['recipe' => $recipe]);
    }

    public function index()
    {
        return view('recipe.index', ['recipes' => $this->repository->allRecipes()]);
    }
}
