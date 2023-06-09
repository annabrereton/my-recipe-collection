<?php

require_once 'RecipesDao.php';

require_once 'functions.php';

$recipeDao = new RecipeDao();

$recipes = $recipeDao->fetchAll();

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

    <nav>
        <a class="home" href="index.php">
            <i class="fa-solid fa-house"></i>
        </a>
        <a class="addlink" href="http://localhost:1234/my-recipe-collection/addrecipe.php">
            Add an item
        </a>
    </nav>

    <header>
        <h1>Savoury Pastry Creations!</h1>
        <p>Hi friends! Welcome to my page displaying my savoury pastry recipes!</p>
    </header>

    <section class="collection">
        <?php
        $html = assignRecipes($recipes);
        echo $html;
        ?>
    </section>

</body>
</html>
