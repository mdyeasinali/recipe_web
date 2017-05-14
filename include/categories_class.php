<?php
require_once('db_class.php');
 class categories extends db{
	 
  	public function add_category($ct,$cat_des,$p_id,$cat_top,$tkn,$ie){
		$im = $this->img_upload($ie,'../image/');
			if($im == 10){
				$this->error = 'Image couldnt upload!';
				}
				$seo_url = $this->get_clean_url($ct);
		$this->arrays = $this->handeller->query("INSERT INTO `category` (`cat_name`,`cat_description`,`cat_image`,`cat_seo_url`,`cat_top`,`cat_parent_id`) VALUES('$ct','$cat_des','$im','$seo_url','$cat_top','$p_id')");
		if($this->arrays){
			return $this->url_return(array('categories.php','categories added','success',$tkn));
			}else{
				return $this->url_return(array('categories.php','categories Not added','error',$tkn));
				}	
		}
	
		
	 public function delete_cat($delecte_id,$tkn){
			foreach($_POST['check_list'] as $check) {
				$this->arrays3 = $this->handeller->query("SELECT * FROM `category` WHERE cat_id ='$check'");
				$row = $this->arrays3->fetch(PDO::FETCH_ASSOC);
				unlink('../'.$row['cat_image']);
				$this->arrays = $this->handeller->prepare("DELETE FROM `category` WHERE cat_id = ? ");
				if($this->arrays->execute(array($check))){
					$this->url_return(array('categories.php','categories Deleted', 'success',$tkn));
					}else{
						$this->url_return(array('categories.php','categories Not Deleted', 'success',$tkn));
						}
    		}
		
		}
		
	public function category(){
		 $return = array();
		 $this->arrays = $this->handeller->query("SELECT * FROM `category` WHERE `cat_parent_id` = '0'");
		 $all = $this->arrays;
			 foreach($all as $c1){
				 $p = array();
				 	$p['id'] = $c1['cat_id'];
					$p['name'] = $c1['cat_name'];
					$p['img'] = $c1['cat_image'];
						
						if($c1['cat_top'] == '1'){
							$p['on_menu'] = '<span class="label label-success">Enable</span>';
							}else{
								$p['on_menu'] = '<span class="label label-important">Disable</span>';
								}
									
					array_push($return,$p);
					
					$p_id = $c1['cat_id'];
					$child1 = $this->handeller->query("SELECT * FROM `category` WHERE `cat_parent_id` = '$p_id'");
					
					foreach($child1 as $c2){
						$p['id'] = $c2['cat_id'];
						$p['name'] = $c1['cat_name'].' > '.$c2['cat_name'];
						$p['img'] = $c2['cat_image'];		
						
							if($c2['cat_top'] == '1'){
								$p['on_menu'] = '<span class="label label-success">Enable</span>';
								}else{
									$p['on_menu'] = '<span class="label label-important">Disable</span>';
									}
							
						array_push($return,$p);
						
							$p_id2 = $c2['cat_id'];
							$child3 = $this->handeller->query("SELECT * FROM `category` WHERE `cat_parent_id` = '$p_id2'");
							
							foreach($child3 as $c3){{
								$p['id'] = $c3['cat_id'];
								$p['name'] = $c1['cat_name'].' > '.$c2['cat_name'].' > '.$c3['cat_name'];
								$p['img'] = $c3['cat_image'];		
								
									if($c3['cat_top'] == '1'){
										$p['on_menu'] = '<span class="label label-success">Enable</span>';
										}else{
											$p['on_menu'] = '<span class="label label-important">Disable</span>';
											}
									
								array_push($return,$p);
								}
							}
						}
				}
				
			return $return;
		}
	
		
	public function edit_show_category($cat_id){
				$return = array();
				$cat = $this->handeller->query("SELECT * FROM `category` WHERE `cat_id` = '$cat_id'");
						foreach($cat as $ec){
							$p = array();							
							$p['title'] = $ec['cat_name'];
							$p['cat_des'] = $ec['cat_description'];
							$p['cat_img'] = $ec['cat_image'];
							if($ec['cat_top'] == '1'){
								$p['cat_top'] = 'checked="checked"';
								}else {
									$p['cat_top'] = '';
									}
						  	$p['cat_p_id'] = $ec['cat_parent_id'];
									
							array_push($return,$p);
						}
						
				return $return;		
		}	
	
		public function update_category($ct,$cat_des,$p_id,$cat_top,$ie,$hidden_img,$tkn,$cat_id){
			if($_FILES[$ie]["size"] == 0 ){
			 $im = $hidden_img;
			 }else{
				 $im = $this->img_upload($ie,'../image/');
				 if($im == 10){
					 $this->error = 'Image couldnt upload!';
					 }
				   }
		  $seo_url = $this->get_clean_url($ct);
		
		$data = array($ct,$cat_des,$p_id,$im,$seo_url,$cat_top,$cat_id);
		$this->arrays = $this->handeller->prepare("UPDATE `category` SET `cat_name`= ?,`cat_description`= ?,`cat_parent_id`= ?,`cat_image`= ?,`cat_seo_url`= ?,`cat_top`= ? WHERE `cat_id` = ? ");
		if($this->arrays->execute($data)){
			$this->url_return(array('categories.php','Categories Update', 'success',$tkn));
				}else{
					$this->url_return(array('add_categories.php','Categories Not Update', 'error',$tkn));
				}
				}

	 
 }
 ?>