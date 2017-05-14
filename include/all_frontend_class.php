<?php
 //require_once('db_class.php');
 class siteEnd extends db{
	 
	 public function show_slider(){
		 $return = array();
		 $this->arrays = $this->handeller->query("SELECT * FROM `slider`");
			foreach($this->arrays as $sl){
				$p = array();
				$p['img'] = $sl['sl_img'];
				$p['url'] = $sl['sl_url'];
				$p['alt'] = $sl['sl_name'];
				array_push($return,$p);			
				}
			return $return;	
		 }
		 
		 
	public function show_Recipes(){
		 $return = array();
		 $this->arrays = $this->handeller->query("SELECT * FROM `Recipes` ORDER BY `co_id` DESC limit 0,4");
			foreach($this->arrays as $sl){
				$p = array();
				$p['co_id'] = $sl['co_id'];
				$p['co_title'] = $sl['co_title'];
				$p['co_dis'] = $sl['co_dis'];
				$p['co_price'] = $sl['co_price'];
				$p['co_o_url'] = $sl['co_owner_url'];
				$p['co_off'] = $sl['co_off'];
				$p['net_price'] =  $sl['co_price']-(($sl['co_price'] * $sl['co_off'])/100);
				$p['co_seo_url'] = $sl['co_seo_url'];
				$p['img'] = $sl['co_fe_img'];
				$p['fea'] = $sl['co_feature'];
				$p['code'] = $sl['co_code'];
				$p['ex_date'] = $sl['co_ex_date'];
				array_push($return,$p);			
				}
			return $return;	
		 }
	public function fea_cop_vew(){
		 $return = array();
		 $this->arrays = $this->handeller->query("SELECT * FROM `Recipes` ORDER BY `co_feature` DESC limit 0,8 ");
			foreach($this->arrays as $sl){
				$p = array();
				$p['co_id'] = $sl['co_id'];
				$p['co_title'] = $sl['co_title'];
				$p['co_dis'] = $sl['co_dis'];
				$p['co_o_url'] = $sl['co_owner_url'];
				$p['co_price'] = $sl['co_price'];
				$p['co_off'] = $sl['co_off'];
				$p['net_price'] =  $sl['co_price']-(($sl['co_price'] * $sl['co_off'])/100);
				$p['co_seo_url'] = $sl['co_seo_url'];
				$p['img'] = $sl['co_fe_img'];
				$p['fea'] = $sl['co_feature'];
				$p['code'] = $sl['co_code'];
				$p['ex_date'] = $sl['co_ex_date'];
				array_push($return,$p);			
				}
			return $return;	
		 }
		 
		
		 
		 

		 
	public function get_front_data(){
		  $return = array();
		 $this->arrays = $this->handeller->query("SELECT * FROM `frontend`");
			foreach($this->arrays as $sl){
				$p = array();
				$p['logo'] = $sl['logo'];
				$p['title'] = $sl['title'];
				$p['copy_text'] = $sl['copy_text'];
				$p['facebook'] = $sl['facebook'];
				$p['twitter'] = $sl['twitter'];
				$p['youtube'] = $sl['youtube'];
				$p['google'] = $sl['google'];
				$p['email'] = $sl['email'];
				array_push($return,$p);			
				}
			return $return;		
		 }	 
		 
	public function get_logo(){
		$data = $this->get_front_data();
		foreach($data as $logo){
			return $logo['logo'];			
			}
		}
		
	public function get_store_email(){
		$data = $this->get_front_data();
		foreach($data as $em){
			return $em['email'];			
			}
		}	
	
	public function get_facebook(){
		$data = $this->get_front_data();
		foreach($data as $soc){
			return $soc['facebook'];
						
			}
		}
	public function get_twitter(){
		$data = $this->get_front_data();
		foreach($data as $soc){
			return $soc['twitter'];
						
			}
		}
		public function get_youtube(){
		$data = $this->get_front_data();
		foreach($data as $soc){
			return $soc['youtube'];
						
			}
		}
		public function get_google(){
		$data = $this->get_front_data();
		foreach($data as $soc){
			return $soc['google'];
						
			}
		}
		
	public function get_c_right(){
		$data = $this->get_front_data();
		foreach($data as $right){
			return $right['copy_text'];			
			}
		}	
		
		
	public function get_site_name(){
		$data = $this->get_front_data();
		foreach($data as $site){
			return $site['title'];			
			}
		}		 
		 
		 
	public function display_category(){
		$return['parent'] = array();
		$return['child'] = array();		
		$this->arrays = $this->handeller->query("SELECT * FROM `category` WHERE cat_parent_id='0' AND cat_top='1'");		
			foreach($this->arrays as $p){
				$pr = array();
				$cat_id = $p['cat_id'];
				$row = $this->arrays2 = $this->handeller->query("SELECT * FROM `category` WHERE cat_parent_id='$cat_id'");
				if($row->rowCount() > 0){
					$pr['ch'] = 'true';
					}else{
						$pr['ch'] = 'false';
						}
				
				$pr['p_id'] = $p['cat_id'];
				$pr['p_name'] = $p['cat_name'];
				$pr['p_url'] = $p['cat_seo_url'];
				array_push($return['parent'],$pr);		
				
					foreach($row as $c){
						$pr['c_id'] = $c['cat_id'];
						$pr['c_name'] = $c['cat_name'];
						$pr['c_url'] = $c['cat_seo_url'];
						array_push($return['child'],$pr);
						}
				}
			return $return;	
		}
	
	public function Show_adv_cat(){
		$return = array();	
		$this->arrays = $this->handeller->query("SELECT * FROM `advertise` WHERE `ad_cat`='1' ORDER BY `ad_id` DESC limit 0,3");		
			foreach($this->arrays as $sl){
				$p = array();
				$p['img'] = $sl['ad_img'];
				$p['title'] = $sl['ad_title'];
				$p['url'] = $sl['ad_url'];
				array_push($return,$p);			
				}
			return $return;		
		 
		}		
	
	public function Show_adv_botm(){
		$return = array();	
		$this->arrays = $this->handeller->query("SELECT * FROM `advertise` WHERE `ad_footer`='1' ORDER BY `ad_id` limit 0,1");		
			foreach($this->arrays as $sl){
				$p = array();
				$p['img'] = $sl['ad_img'];
				$p['title'] = $sl['ad_title'];
				$p['url'] = $sl['ad_url'];
				array_push($return,$p);			
				}
			return $return;		
		 
		}
	public function Show_adv_left(){
		$return = array();	
		$this->arrays = $this->handeller->query("SELECT * FROM `advertise` WHERE `ad_c_page`='1' ORDER BY `ad_id` limit 0,2");		
			foreach($this->arrays as $sl){
				$p = array();
				$p['img'] = $sl['ad_img'];
				$p['title'] = $sl['ad_title'];
				$p['url'] = $sl['ad_url'];
				array_push($return,$p);			
				}
			return $return;		 
		}
		
		 
		 
	  
}
?>