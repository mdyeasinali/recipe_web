<?php
 require_once('db_class.php');
 class frontend extends db{
	  
	 public function get_frontEnd_data(){
		 $this->arrays = $this->handeller->query("SELECT * FROM `frontend`");
		 return $this->arrays;
	}
		 
	 public function update_frontend($site_n,$st_slogan,$st_n,$st_ow_n,$st_ph,$st_em,$st_add,$mta_key,$mta_title,$mta_des,$copy_text,$s_fac,$s_twit,$s_goog,$s_you,$tkn,$ie,$hidden_logo){
		if($_FILES[$ie]["size"] == 0 ){
			 $im = $hidden_logo;
			 }else{
				 $im = $this->img_upload($ie,'../image/');
				 if($im == 10){
					 $this->error = 'Image could not upload!';
					 }
				   }					 													
			$data = array($site_n,$st_slogan,$st_n,$st_ow_n,$st_ph,$st_em,$st_add,$mta_key,$mta_title,$mta_des,$copy_text,$s_fac,$s_twit,$s_goog,$s_you,$im,'1');								
			$this->query = $this->handeller->prepare("UPDATE `frontend` SET 
			title = ?, slogan = ?, store_name = ?, store_owner_name = ?, phone = ?, email = ?, address = ?, meta_keyword = ?, meta_title = ?, meta_dis = ?, copy_text = ?, facebook = ?, twitter = ?, google = ?, youtube = ?, logo = ? WHERE `front_id` = ?");
				
				if($this->query->execute($data) && $im != 10){
					return $this->url_return(array('frontend.php','Your Settings has been updated','success',$tkn));
					}else{
						return $this->url_return(array('frontend.php','Your Settings not updated '. $this->error,'eror',$tkn));
						}
		
	}
			
}
?>