<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleTags;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Recipe;

class RecipeRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias, HandleTags;

    public function __construct(Recipe $model)
    {
        $this->model = $model;
    }

    public function allRecipes()
    {
        return $this->model->orderBy('title')->get();
    }
}
