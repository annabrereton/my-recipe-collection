<?php

require_once '../functions.php';

require_once '../RecipesDao.php';

require_once '../Recipes.php';

use PHPUnit\Framework\TestCase;

class TestRecipes extends TestCase
{
    public function testAssignRecipes_GivenRecipeReturnHtml()
    {
        // ARRANGE - set up
        // start by making a recipe object (see line 26 of the dao)
        // This is the test data
        $recipe = [new Recipe ('Tasty Treat', 'Delicious pastry', '2023-04-05'
            , 'https://static01.nyt.com/images/2021/04/07/dining/06croissantsrex1/merlin_184841898_ccc8fb62-ee41-44e8-9ddf-b95b198b88db-articleLarge.jpg?w=1280&q=75', '12')];

        // ACT
        // Pass your new recipe object into assignRecipes
        $result = assignRecipes($recipe);

        // Set $expected to contain all the HTML we should get back by passing our recipe
        // into assignRecipes
        $expected = '<article class="recipe-card"><h2 class="recipe-name" >Tasty Treat</h2><img class="imagelink" src=https://static01.nyt.com/images/2021/04/07/dining/06croissantsrex1/merlin_184841898_ccc8fb62-ee41-44e8-9ddf-b95b198b88db-articleLarge.jpg?w=1280&q=75 alt="Tasty Treat"><p class="recipe-description">Description: Delicious pastry</p><p class="recipe-date">Date: 2023-04-05</p></article>';

        // ASSERT - compare the expected result to the actual result
        $this->assertEquals($expected, $result);
    }
//    MALFORMED - array expected, string given
    public function testAssignRecipes_GivenStringReturnException()
    {
        // ARRANGE - set up
        // start by making a recipe object (see line 26 of the dao)
        // This is the test data
        $recipe = new Recipe ('Tasty Treat', 'Delicious pastry', '2023-04-05'
            , 'https://static01.nyt.com/images/2021/04/07/dining/06croissantsrex1/merlin_184841898_ccc8fb62-ee41-44e8-9ddf-b95b198b88db-articleLarge.jpg?w=1280&q=75', '12');

        // ASSERT - compare the expected result to the actual result
        $this->expectException(TypeError::class);

        // ACT
        // Pass your new recipe object into assignRecipes
        $result = assignRecipes($recipe);
    }
}
