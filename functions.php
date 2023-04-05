<?php
function assignRecipes(array $recipes): string
{
    $html = '';
    foreach ($recipes as $recipe) {
        $html .= '<article class="recipe-card">'
            . '<h2 class="recipe-name" >' . $recipe->getName() . '</h2>'
            . '<img class="imagelink" src=' . $recipe->getImagelink() . ' alt="' . $recipe->getName() . '">'
            . '<p class="recipe-description">Description: ' . $recipe->getDescription() . '</p>'
            . '<p class="recipe-date">Date: ' . $recipe->getDate() . '</p>'
            . '</article>';
    }
    return $html;
}
