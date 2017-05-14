<?php
  require_once('../../include/Recipe_class.php');
  

  $Recipe = new Recipe();
	
	if($_SERVER['REQUEST_METHOD'] == "POST"){
	  
              $recipe_name = $_POST['recipe_name'];
			  $cat_id = $_POST['r_cat_id'];
			  $cooktime = $_POST['cook_time'];
			  $dis = $_POST['dis'];
			  $rec_u_id = $_POST['rec_u_id'];
			  $rec_cat = $_POST['rec_cat'];
			  $tkn = $_POST['token'];
			  $Recipe->add_Recipe($recipe_name, $cat_id, $dis, $ing, $dir, $pre_time, $cook_time, $rec_u_id, $rec_cat, $ie);
			  
			   	  
	}

?>