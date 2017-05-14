<?php
  require_once('../../../recipe/include/categories_class.php');
  $category = new categories();
  
 if($_SERVER['REQUEST_METHOD'] == "POST"){
	  if(empty($_POST['cat_name'])||
	    empty($_REQUEST['cat_des'])){
		  }else{
			  $ct = $_POST['cat_name'];
			  $cat_des = $_POST['cat_des'];
			  $p_id = $_POST['p_id'];
			  if(empty($_POST['cat_top'])){
							$cat_top = '0';
						}else{
							$cat_top ='1';
						}			  
			  $tkn = $_POST['token'];
			  $category->add_category($ct,$cat_des,$p_id,$cat_top,$tkn,'img');
			  }	

	}