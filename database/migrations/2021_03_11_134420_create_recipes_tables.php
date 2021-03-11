<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecipesTables extends Migration
{
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            createDefaultTableFields($table);
            $table->string('title', 200)->nullable();
            $table->string('subtitle', 200)->nullable();
            $table->string('owner', 200)->nullable();
            $table->text('description')->nullable();
            $table->timestamp('publish_start_date')->nullable();
        });

        Schema::create('recipe_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'recipe');
        });


    }

    public function down()
    {

        Schema::dropIfExists('recipe_slugs');
        Schema::dropIfExists('recipes');
    }
}
