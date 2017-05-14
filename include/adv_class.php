<?php
 //require_once('db_class.php');
 class advertise extends db{
	  
		public function adv_list(){
		 $return = array();
		 $this->arrays = $this->handeller->query("SELECT * FROM `advertise`");
			foreach($this->arrays as $adv){
				$p = array();
				$p['id'] = $adv['ad_id'];
				$p['ad_title'] = $adv['ad_title'];
				$p['img'] = $adv['ad_img'];					
					if($adv['ad_footer'] == 1){
						$p['ad_footer'] = '<span class="label label-success">Enable</span>';
						}else {
							$p['ad_footer'] = '<span class="label label-important">Disable</span>';
							}
					if($adv['ad_c_page'] == 1){
						$p['ad_c_page'] = '<span class="label label-success">Enable</span>';
						}else {
							$p['ad_c_page'] = '<span class="label label-important">Disable</span>';
							}
					if($adv['ad_cat'] == 1){
						$p['ad_cat'] = '<span class="label label-success">Enable</span>';
						}else {
							$p['ad_cat'] = '<span class="label label-important">Disable</span>';
							}
					if($adv['ad_st'] == 1){
						$p['ad_st'] = '<span class="label label-success">Enable</span>';
						}else {
							$p['ad_st'] = '<span class="label label-important">Disable</span>';
							}
				array_push($return,$p);			
				}
			return $return;	
		}
		
		
		public function add_adv($ad_title,$ad_url,$ad_footer,$ad_c_page,$ad_cat,$ad_st,$tkn){
			
			
			$data = array($ad_title,$ad_url,$ad_footer,$ad_c_page,$ad_cat,$ad_st);
			$this->arrays = $this->handeller->prepare("INSERT INTO `advertise` (`ad_title`,`ad_url`, `ad_footer`, `ad_c_page`, `ad_cat`,`ad_st`) VALUES(?, ?, ?, ?, ?, ?)");
			if($this->arrays->execute($data)){
				return $this->url_return(array('advertiseing.php','Advertisement has been added','success',$tkn));
					}else{
						return $this->url_return(array('advertiseing.php','Advertisement not added','error',$tkn));
					}				
		}
		
		
		
		public function delete_adv($delecte_id,$tkn){
			foreach($_POST['check_list'] as $check) {
				$this->arrays3 = $this->handeller->query("SELECT * FROM `advertise` WHERE `ad_id` ='$check'");
				$row = $this->arrays3->fetch(PDO::FETCH_ASSOC);
				$this->arrays = $this->handeller->prepare("DELETE FROM `advertise` WHERE `ad_id` = ? ");
				if($this->arrays->execute(array($check))){
					$this->url_return(array('advertiseing.php','Advertisement Deleted', 'success',$tkn));
					}else{
						$this->url_return(array('advertiseing.php','Advertisement Not Deleted', 'error',$tkn));
						}
    		}
		
		} 
		
		
		
	public function edit_show_adv($ad_id){
				$return = array();
				$advertise = $this->handeller->query("SELECT * FROM `advertise` WHERE `ad_id` = '$ad_id'");
						foreach($advertise as $ec){
							$p = array();							
							$p['title'] = $ec['ad_title'];
							$p['url'] = $ec['ad_url'];
							$p['img'] = $ec['ad_img'];
							if($ec['ad_footer'] == '1'){
								$p['ad_footer'] = 'checked="checked"';
								}else {
									$p['ad_footer'] = '';
									}
							if($ec['ad_c_page'] == '1'){
								$p['ad_c_page'] = 'checked="checked"';
								}else {
									$p['ad_c_page'] = '';
									}
							if($ec['ad_cat'] == '1'){
								$p['ad_cat'] = 'checked="checked"';
								}else {
									$p['ad_cat'] = '';
									}
							if($ec['ad_st'] == '1'){
								$p['ad_st'] = 'checked="checked"';
								}else {
									$p['ad_st'] = '';
									}
							array_push($return,$p);
						}
						
				return $return;		
		}
		
		 public function update_adv($ad_title, $ad_url, $ad_footer, $ad_c_page, $ad_cat, $ad_st, $tkn,$ie,$hidden_img,$adv_id){
			if($_FILES[$ie]["size"] == 0 ){
			 $im = $hidden_img;
			 }else{
				 $im = $this->img_upload($ie,'../image/');
				 if($im == 10){
					 $this->error = 'Image couldnt upload!';
					 }
				   }
			$data = array($ad_title,$im,$ad_url,$ad_footer,$ad_c_page,$ad_cat,$ad_st,$adv_id);
			$this->arrays = $this->handeller->prepare("UPDATE `advertise` SET `ad_title` = ? ,`ad_img` = ? ,`ad_url`=? , `ad_footer`=?,`ad_c_page`=?,`ad_cat`=?,`ad_st`=? WHERE `ad_id` = ? ");
			if($this->arrays->execute($data)){
				$this->url_return(array('advertiseing.php','Advertise Updated', 'success',$tkn));
					}else{
						$this->url_return(array('edit_advertiseing.php','Advertise Not Update', 'error',$tkn));
					}
		} 
			
		
			
	}
?>