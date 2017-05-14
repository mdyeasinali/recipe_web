<?php
require_once('../../../recipe/include/categories_class.php');
$allusers = new categories();

$row = $allusers->category();
die( json_encode($row));
?>