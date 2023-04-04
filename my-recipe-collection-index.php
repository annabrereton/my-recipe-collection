<?php

require_once 'RecipesDao.php';
//require_once 'Recipes.php';

$recipeDao = new RecipeDao(); // Testing class, connecting to db. Could print-r here
//echo '<pre>';
//print_r($recipeDao);
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

?>

<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Anna's Recipe Collection</title>

    <meta name="description" content="A selection of savoury pastry recipes">
    <meta name="author" content="Anna Brereton">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/my-recipe-collection.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="shortcut icon" href="https://res.cloudinary.com/dkweuv1ms/image/upload/v1680519387/logo_b4wygb.png">
    <link rel="apple-touch-icon" href="https://res.cloudinary.com/dkweuv1ms/image/upload/v1680519387/apple-touch-icon_ysqk2d.png">
    <link rel="android-chrome-192x192-icon" href="https://res.cloudinary.com/dkweuv1ms/image/upload/v1680519387/android-chrome-192x192_rsaepq.png">

    <!-- <script defer src="js/index.js"></script> -->

</head>

<body>

<header>
    <h1>Random Recipes</h1>

    <p>Hi friends! Welcome to my page of not so random recipes, they're all savoury pastries!</p>
</header>

<section class="collection">
<?php
$html = '';
foreach ($recipes as $recipe) {
    $html .= '<article class="recipe-card">'
        . '<h3 class="recipe-name" >Name: ' . $recipe->getName() . '</h3>'
        . '<img class="imagelink" src=' . $recipe->getImagelink() . ' alt="' . $recipe->getName() . '"></img>'
        . '<p class="recipe-description">Description: ' . $recipe->getDescription() . '</p>'
        . '<p class="recipe-date">Date: ' . $recipe->getDate() . '</p>'
        . '</article>';
}
echo $html;
?>
</section>

    <nav>
        <a class="home" href="index.html">
                    <i class="fa-solid fa-house"></i>
        </a>
        <form action="#" class="addbutton">
            <button type="submit">Add an item</button>
        </form>
    </nav>

</body>
</html>
