<?php
require_once('db_class.php');

class Recipe extends db{
	

    public function add_Recipe($recipe_name, $cat_id, $dis, $ing, $dir, $pre_time, $cook_time, $rec_u_id, $rec_cat, $tkn, $ie)
    {
        $im = $this->img_upload($ie, '../image/');
        if ($im == 10) {
            $this->error = 'Image couldnt upload!';
        }
        $seo_url = $this->get_clean_url($recipe_name);

        $this->query = $this->handeller->query("INSERT INTO `recipes` ( `cat_id`, `user_id`, `rec_name`, `rec_image`, `rec_des`, `rec_publish_date`, `rec_seo_url`)VALUES('$cat_id','$rec_u_id','$recipe_name','$im','$dis',NOW(),'$seo_url')");
        if ($this->query && $im != 10) {
            return $this->url_return(array('recipe.php', 'Recipe has been added', 'success', $tkn));
        } else {
            return $this->url_return(array('recipe.php', 'Recipe not added ' . $this->error, 'error', $tkn));
        }
    }
	
	public function add_recipe_api($recipe_name, $cat_id, $dis, $ing, $dir, $pre_time, $cook_time, $rec_u_id, $rec_cat, $ie){			
				$data = array($recipe_name, $cat_id, $ie, $dis, $ing, $dir, $pre_time, $cook_time, $rec_u_id, $rec_cat);							
				$this->query = $this->handeller->prepare("INSERT INTO `recipes`(`rec_name`,`cat_id`,`rec_image`,`rec_des`,`rec_ing`,`rec_dir`,`rec_pre_time`,`rec_cook_time`,`rec_publish_date`,`rec_seo_url`) VALUES( ?, ?, ?, ?, ?, ?, ?, ?,NOW(),?);");	
			}
			

    public function recipe_update($recipe_name, $cat_id, $dis, $tkn, $ie, $hidden_img, $recipe_id)
    {
        if ($_FILES[$ie]["size"] == 0) {
            $im = $hidden_img;
        } else {
            $im = $this->img_upload($ie, '../image/');
            if ($im == 10) {
                $this->error = 'Image couldnt upload!';
            }
        }
        $seo_url = $this->get_clean_url($recipe_name);
        $data = array($cat_id, $recipe_name, $dis, $seo_url, $im, $recipe_id);
        $this->query = $this->handeller->prepare("UPDATE `recipes` SET `cat_id` = ?, `rec_name` = ?, `rec_des` = ?,`rec_seo_url` = ?,`rec_image` = ? WHERE `rec_id` = ?");

        if ($this->query->execute($data) && $im != 10) {
            return $this->url_return(array('Recipe.php', 'Your Recipe has been updated', 'success', $tkn));
        } else {
            return $this->url_return(array('edit_Recipe.php', 'Your Recipe not updated ' . $this->error, 'error', $tkn));
        }
    }


    public function delete_Recipe($delecte_id, $tkn)
    {
        foreach ($_POST['check_list'] as $check) {
            $this->arrays3 = $this->handeller->query("SELECT * FROM `recipes` WHERE 	rec_id ='$check'");
            $row = $this->arrays3->fetch(PDO::FETCH_ASSOC);
            unlink('../' . $row['	rec_image']);
            $this->arrays = $this->handeller->prepare("DELETE FROM `recipes` WHERE 	rec_id = ? ");
            if ($this->arrays->execute(array($check))) {
                $this->url_return(array('recipe.php', 'recipes Deleted', 'success', $tkn));
            } else {
                $this->url_return(array('recipe.php', 'recipes Not Deleted', 'error', $tkn));
            }
        }

    }


    public function get_ex_noti($ex)
    {
        $start = date('Y-m-d');
        $ex_date = substr($ex, 6, 4) . '-' . substr($ex, 0, 2) . '-' . substr($ex, 3, 2);
        $end = $ex_date;
        if ($start < $end) {
            return '1';
        } else {
            return '0';
        }

    }


    public function show_all_Recipe()
    {
        $this->arrays = $this->handeller->query("SELECT * FROM `recipes`");
        $row = $this->arrays;
        $return = array();
        foreach ($row as $c) {
            $p = array();
            $user_id = $c['user_id'];
            $user = $this->handeller->query("SELECT * FROM `users` WHERE `user_id`='$user_id'");
            $u_info = $user->fetch(PDO::FETCH_ASSOC);
            $publisher_name = $u_info['user_first_name'] . ' ' . $u_info['user_last_name'];

            $p['id'] = $c['rec_id'];
            $p['img'] = $c['rec_image'];
            $p['title'] = $c['rec_name'];
            $p['publisher_name'] = $publisher_name;
            $p['pub_date'] = $c['rec_publish_date'];
            if ($c['status'] == '1') {
                $p['status'] = '<span class="label label-success">Active</span>';
            } else {
                $p['status'] = '<span class="label label-important">Expired</span>';
            }

            array_push($return, $p);
        }

        return $return;
    }


    public function edit_show_recipe($recipe_id)
    {
        $return = array();
        $this->arrays = $this->handeller->query("SELECT * FROM `recipes` WHERE `rec_id` = '$recipe_id'");
        foreach ($this->arrays as $ec) {
            $cat_id = $ec['cat_id'];
            $this->arrays2 = $this->handeller->query("SELECT * FROM `category` WHERE `cat_id` = '$cat_id'");
            $c_name = $this->arrays2->fetch(PDO::FETCH_ASSOC);
            $p = array();
            $p['title'] = $ec['rec_name'];
            $p['cat'] = $c_name['cat_name'];
            $p['cat_id'] = $cat_id;
            $p['dis'] = $ec['rec_des'];
            $p['img'] = $ec['rec_image'];
            $p['seo'] = $ec['rec_seo_url'];
            array_push($return, $p);
        }
        return $return;
    }
public function show_recipe_api(){
		 $return = array();
		 $this->arrays = $this->handeller->query("SELECT * FROM `recipes`");
			foreach($this->arrays as $sl){
				$p = array();
				$p['catId'] = $sl['cat_id'];
				$p['userId'] = $sl['user_id'];
				$p['recName'] = $sl['rec_name'];
				$p['recImage'] = $sl['rec_image'];
				$p['recDes'] = $sl['rec_des'];
				$p['recIng'] = $sl['rec_ing'];
				$p['recDir'] = $sl['rec_dir'];
				$p['PreTime'] = $sl['rec_pre_time'];
				$p['CookTime'] = $sl['rec_cook_time'];
				$p['publishDate'] = $sl['rec_publish_date'];
				$p['reviews'] = $sl['rec_reviews'];
				array_push($return,$p);			
				}
			return $return;	
		}

}

?>