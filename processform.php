<?php

require_once 'RecipesDao.php';

$recipeDao = new RecipeDao();

if (isset($_POST['recipe-name'])){
    //should add validation here for entry type and field length
    $new_recipe = new Recipe($_POST['recipe-name'], $_POST['recipe-description'], $_POST['recipe-date']
        , $_POST['imagelink']);
    $recipeDao->add($new_recipe);
}

header('Location: index.php');