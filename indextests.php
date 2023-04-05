<?php

// Testing code as writing, little by little
require_once 'RecipesDao.php';
require_once 'Recipes.php';

$recipeDao = new RecipeDao();

$recipes = $recipeDao->fetchAll();

echo '<pre>';
print_r($recipes);
echo '</pre>';

$recipe3 = $recipeDao->fetch(2); // Testing for recipe object primary key number 2 with function fetch() in Recipe Dao

echo '<pre>';
print_r($recipe3);
echo '</pre>';


// This is to add a new recipe object
//$newRecipe = new Recipe('Tuna', 'tinned tuna with melted cheese', '2023-04-03', 'https://www.google.com'); // Define $newRecipe to add using recipe constructor (from Recipes.php)
//
//$newRecipeId =$recipeDao->add($newRecipe); // Adding $newRecipe. To find out which key db assigns, $newRecipeId is placeholder
//
//$newRecipe->setId($newRecipeId);
//
//echo '<pre>';
//print_r($newRecipe);
//echo '</pre>';

$recipes = $recipeDao->fetchAll();
//echo '<pre>';
//print_r($recipes);
//echo '</pre>';
//
//echo '<pre>';
//echo $recipes[2]->getName();
//echo '</pre>';
//echo '<pre>';
//print_r($recipes);
//echo '</pre>';
$recipeDao = new RecipeDao(); // Testing class, connecting to db. Could print-r here
//echo '<pre>';
//print_r($recipeDao);
//echo '</pre>';
