<?php
require_once('../../include/Recipe_class.php');
$allrecipe = new Recipe();

$row = $allrecipe->show_recipe_api();
die( json_encode($row));
?>