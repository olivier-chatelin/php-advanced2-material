<?php


require __DIR__ . '/../models/recipe-model.php';

function browseRecipes(): void
{
    $recipes = getAllRecipes();

    require __DIR__ . '/../views/index.php';
}
function showRecipe(int $id)
{
    $recipe = getRecipeById($id);
    require __DIR__ . '/../views/show.php';

}
function addRecipe()
{
    $errors = [];
    if ($_SERVER["REQUEST_METHOD"] === 'POST') {
        $recipe = $_POST;
        saveRecipe($recipe);
        header('Location: /');
    }
    require __DIR__ . '/../views/form.php';


}