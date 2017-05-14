<?php 
	//require_once('db_class.php');
	
	 class intEnd extends db{
		
		public function timeLeft($ex){
			$ex_date = substr($ex,6,4).'-'. substr($ex,0,2).'-'. substr($ex,3,2);
			$expirationDate = strtotime($ex_date." 23:59:59");
			$toDay = strtotime(date('Y-m-d H:i:s'));
			$difference = abs($toDay - $expirationDate);
			$days = floor($difference / 86400);
			$hours = floor(($difference - $days * 86400) / 3600);
			$minutes = floor(($difference - $days * 86400 - $hours * 3600) / 60);
			$seconds = floor($difference - $days * 86400 - $hours * 3600 - $minutes * 60);
			return $days. ' Days '.$hours. ' Hours';
			}
			
		public function secountLeft($ex){			
			$ex_date = substr($ex,6,4).'-'. substr($ex,0,2).'-'. substr($ex,3,2);
			$expirationDate = strtotime($ex_date." 23:59:59");
			$toDay = strtotime(date('Y-m-d H:i:s'));
			$difference = abs($toDay - $expirationDate);
			$days = floor($difference / 86400);
			$hours = floor(($difference - $days * 86400) / 3600);
			$minutes = floor(($difference - $days * 86400 - $hours * 3600) / 60);
			$seconds = floor($difference - $days * 86400 - $hours * 3600 - $minutes * 60);			
			return $difference;
			}	
			
			
		public function cat_id_by_url($url){
			$this->arrays = $this->handeller->query("SELECT * FROM `category` WHERE cat_seo_url='$url'");
			$cat_id = $this->arrays->fetch(PDO::FETCH_ASSOC);
			return $cat_id['cat_id'];
			}	
			
		public function get_cat_title($url){
			$this->arrays = $this->handeller->query("SELECT * FROM `category` WHERE cat_seo_url='$url'");
			$cat_id = $this->arrays->fetch(PDO::FETCH_ASSOC);
			return $cat_id['cat_name'];
			}	
			
			
		public function cat_cop_view($id,$l){
			$return = array();
			 $this->arrays = $this->handeller->query("SELECT * FROM `Recipes` WHERE cat_id='$id' ORDER BY `co_id` DESC limit $l,5");
				foreach($this->arrays as $sl){
					$p = array();
					$p['id'] = $sl['co_id'];
					$p['name'] = $sl['co_title'];
					$p['dis'] = $sl['co_dis'];
					$p['co_price'] = $sl['co_price'];
					$p['co_o_url'] = $sl['co_owner_url'];
					$p['co_off'] = $sl['co_off'];
					$p['net_price'] =  $sl['co_price']-(($sl['co_price'] * $sl['co_off'])/100);
					$p['seo_url'] = $sl['co_seo_url'];
					$p['img'] = $sl['co_fe_img'];
					$p['alt'] = $sl['co_title'];
					$p['fea'] = $sl['co_feature'];
					$p['code'] = $sl['co_code'];
					$p['ex_date'] = $this->secountLeft($sl['co_ex_date']);
					array_push($return,$p);			
					}
				return $return;	
			}
			
			
		public function co_page_nav($id){
			$this->arrays = $this->handeller->query("SELECT * FROM `Recipes` WHERE cat_id='$id'");
			$count = $this->arrays->rowCount();
			$page = ceil($count/5);
			return $page;
			}
			
			
		public function co_info_footer(){
			$return = array();
			$this->arrays = $this->handeller->query("SELECT * FROM `information`  WHERE Information_meta_Bottom = '1' ORDER BY `Information_id`");
			foreach($this->arrays as $in){
				$i['title'] = $in['Information_title'];
				$i['des'] = $in['Information_description'];
				$i['seo'] = $in['Information_seo_keyword'];
				array_push($return,$i);
				}
				return $return;			
			}	
			
		public function get_info_details($url,$kay){
			$return = array();
			$this->arrays = $this->handeller->query("SELECT * FROM  `information` WHERE Information_seo_keyword='$url'");
			$row = $this->arrays->fetch(PDO::FETCH_ASSOC);
			return $row[$kay];		
			}
		
		public function get_sin_Recipe($url,$fn){
			$data = array($url);
			$this->arrays3 = $this->handeller->prepare("SELECT * FROM  `Recipes` WHERE  `co_seo_url`= ?");
			$this->arrays3->execute($data);
			$row = $this->arrays3->fetch(PDO::FETCH_ASSOC);			
			return $row[$fn];
		}
		
		
		public function cat_src_list(){
		 $return = array();
		 $this->arrays = $this->handeller->query("SELECT * FROM `category` WHERE `cat_parent_id` = '0'");
		 $all = $this->arrays;
			 foreach($all as $c1){
				 $p = array();
				 	$p['id'] = $c1['cat_id'];
					$p['name'] = $c1['cat_name'];
					$p['img'] = $c1['cat_image'];				
					$p['url'] = $c1['cat_seo_url'];
									
					array_push($return,$p);
					
					$p_id = $c1['cat_id'];
					$child1 = $this->handeller->query("SELECT * FROM `category` WHERE `cat_parent_id` = '$p_id'");
					
					foreach($child1 as $c2){
						$p['id'] = $c2['cat_id'];
						$p['name'] = $c1['cat_name'].' > '.$c2['cat_name'];
						$p['img'] = $c2['cat_image'];		
						$p['url'] = $c2['cat_seo_url'];
						array_push($return,$p);
						
							$p_id2 = $c2['cat_id'];
							$child3 = $this->handeller->query("SELECT * FROM `category` WHERE `cat_parent_id` = '$p_id2'");
							
							foreach($child3 as $c3){{
								$p['id'] = $c3['cat_id'];
								$p['name'] = $c1['cat_name'].' > '.$c2['cat_name'].' > '.$c3['cat_name'];
								$p['img'] = $c3['cat_image'];
								$p['url'] = $c3['cat_seo_url'];	
								array_push($return,$p);
								}
							}
						}
				}
				
			return $return;
		}
		
		
	public function sidebar_p_cat(){
		 $this->arrays = $this->handeller->query("SELECT * FROM `category` WHERE `cat_parent_id` = '0'");
		 return $this->arrays;
		}	
		
	public function sidebar_c_cat($p_id){
		 $this->arrays = $this->handeller->query("SELECT * FROM `category` WHERE `cat_parent_id` = '$p_id'");
		 return $this->arrays;
		}	
		
	public function check_child($id){
		$this->arrays = $this->handeller->query("SELECT * FROM `category` WHERE `cat_parent_id` = '$id'");
		$row = $this->arrays->rowCount();
		return $row;
	}		
		
		
		
	
	public function show_brands(){
		$return = array();	
		$this->arrays = $this->handeller->query("SELECT * FROM `users` WHERE `user_role`='2' ORDER BY `user_role` limit 0,6");		
			foreach($this->arrays as $sl){
				$p = array();
				$p['img'] = $sl['user_img'];
				array_push($return,$p);			
				}
			return $return;			 
		}
	public function show_par_details($co_u_id,$fn){
			$data = array($co_u_id);
			$this->arrays3 = $this->handeller->prepare("SELECT * FROM  `users` WHERE  `user_id`= ?");
			$this->arrays3->execute($data);
			$row = $this->arrays3->fetch(PDO::FETCH_ASSOC);			
			return $row[$fn];
		}
	public function pop_brands_count(){
			$this->arrays = $this->handeller->query("SELECT * FROM `users`  WHERE `user_role` = '2'");
			$countrow = $this->arrays->rowCount();
			return $countrow;
			}
			
			
	public function cus_news($n_em){
		$agent = $this->user_agent();
		$ip = $this->user_ip();
		$data = array($n_em,$agent,$ip,1);
		$this->arrays = $this->handeller->prepare("INSERT INTO `newsletter` (`news_em` ,`news_date`, `news_user_agent`, `news_ip`,`news_st`) VALUES( ?, NOW(), ?, ?, ?)");
		
		if($this->arrays->execute($data)){
			$msg = "Thanks for subscription.";
			$sub = "Recipe Hut News Letter Subscription.";
			$this->email_temp($n_em,$msg,$sub);
			$this->fontendurl_return(array('index.php','Subscription Successfull'));													
					}else{						
						$this->fontendurl_return(array('index.php','Subscription Not Successfull'));
						}
			
		}
		
		
	public function search_by_title($title){
			$return = array();
			 $this->arrays = $this->handeller->query("SELECT * FROM `Recipes` WHERE co_title LIKE '%$title%' ORDER BY `co_title` ASC limit 0,5");
				foreach($this->arrays as $sl){
					$p = array();
					$p['id'] = $sl['co_id'];
					$p['name'] = $sl['co_title'];
					$p['dis'] = $sl['co_dis'];
					$p['co_price'] = $sl['co_price'];
					$p['co_o_url'] = $sl['co_owner_url'];
					$p['co_off'] = $sl['co_off'];
					$p['net_price'] =  $sl['co_price']-(($sl['co_price'] * $sl['co_off'])/100);
					$p['seo_url'] = $sl['co_seo_url'];
					$p['img'] = $sl['co_fe_img'];
					$p['alt'] = $sl['co_title'];
					$p['fea'] = $sl['co_feature'];
					$p['code'] = $sl['co_code'];
					$p['ex_date'] = $this->secountLeft($sl['co_ex_date']);
					array_push($return,$p);			
					}
				return $return;	
			}
			
	
	public function search_by_off($off){
			$return = array();
			 $this->arrays = $this->handeller->query("SELECT * FROM `Recipes` WHERE co_off<='$off' ORDER BY `co_title` ASC limit 0,5");
				foreach($this->arrays as $sl){
					$p = array();
					$p['id'] = $sl['co_id'];
					$p['name'] = $sl['co_title'];
					$p['dis'] = $sl['co_dis'];
					$p['co_price'] = $sl['co_price'];
					$p['co_o_url'] = $sl['co_owner_url'];
					$p['co_off'] = $sl['co_off'];
					$p['net_price'] =  $sl['co_price']-(($sl['co_price'] * $sl['co_off'])/100);
					$p['seo_url'] = $sl['co_seo_url'];
					$p['img'] = $sl['co_fe_img'];
					$p['alt'] = $sl['co_title'];
					$p['fea'] = $sl['co_feature'];
					$p['code'] = $sl['co_code'];
					$p['ex_date'] = $this->secountLeft($sl['co_ex_date']);
					array_push($return,$p);			
					}
				return $return;	
			}			
	
	
			
		
}	
?>