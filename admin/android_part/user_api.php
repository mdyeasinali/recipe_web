<?php
require_once('../../../recipe/include/users_class.php');
$allusers = new users();

$row = $allusers->user_list();
die( json_encode($row));
?>