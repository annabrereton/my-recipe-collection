<?php
// Dao standing for DATA ACCESS OBJECT
// This accesses data from the recipes database to use to connect to Recipes.php
require_once 'collection-db-connect.php';
require_once 'Recipes.php';

class RecipeDao
{
    private PDO $db;

    public function __construct()
    {
        $this->db = connectToDb('mycollection'); // 'INJECTED' name of database into the function
    }                                      // Index9 tests this

    public function fetchAll(): array      // FETCHING data from db
    {
        $sql = 'SELECT `id`, `name`, `description`, `date`, `imagelink` '
            . 'FROM `collection_recipes`; ';

        $query = $this->db->prepare($sql);
        $query->execute();
        $rows = $query->fetchAll();

        $recipes = [];                         // Made a recipe constructor to create recipe objects to
        foreach ($rows as $row) {           // return array of recipes rather than an array of arrays
            $recipe = new Recipe ($row['name'], $row['description'], $row['date'], $row['imagelink'], $row['id']);
            $recipes[] = $recipe;
        }

        return $recipes;                        // Returns recipe objects
    }

    public function fetch(int $recipeId): Recipe
    {
        $sql = 'SELECT `id`, `name`, `description`, `date`,  `imagelink` '
            . 'FROM `collection_recipes` '
            . 'WHERE `id` = :id; ';

        $values = [':id' => $recipeId]; // Array

        $query = $this->db->prepare($sql);
        $query->execute($values);
        $recipe = $query->fetch();

        return new Recipe($recipe['name'], $recipe['description'], $recipe['date'], $recipe['imagelink'], $recipe['id']);
    }

    public function add(Recipe $recipe):int
    {
        $sql = 'INSERT INTO `collection_recipes` (`name`, `description`, `date`, `imagelink`) '  // Does not contain 'id' so the db auto increment
            . 'VALUES (:name, :description, :date, :imagelink); ';

        $values = array(
            'name' => $recipe->getName(),
            'description' => $recipe->getDescription(),
            'date' => $recipe->getDate(),
            'imagelink' => $recipe->getImagelink(),
        );

        $query = $this->db->prepare($sql);
        $query->execute($values);

        return $this->db->lastInsertId(); // lastInsertId is a part of PDO
    }
}
