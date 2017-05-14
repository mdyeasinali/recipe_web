<?php
 require_once('db_class.php');
 class slider extends db{
	  
		public function slider_list(){
		 $return = array();
		 $this->arrays = $this->handeller->query("SELECT * FROM `slider`");
			foreach($this->arrays as $sl){
				$p = array();
				$p['id'] = $sl['sl_id'];
				$p['name'] = $sl['sl_name'];
				$p['date'] = $sl['sl_date'];
				$p['img'] = $sl['sl_img'];
					
					if($sl['sl_status'] == 1){
						$p['status'] = '<span class="label label-success">Enable</span>';
						}else {
							$p['status'] = '<span class="label label-important">Disable</span>';
							}
				array_push($return,$p);			
				}
			return $return;	
		}
		
		
		public function add_slider($name,$slider_link,$st,$tkn,$ie){
			$sl_d = date('Y-m-d');
			$im = $this->img_upload($ie,'../image/');
			if($im == 10){
				$this->error = 'Image could not upload!';
				}
			$data = array($sl_d,$st,$name,$slider_link,$im);
			$this->arrays = $this->handeller->prepare("INSERT INTO `slider` (`sl_date`,`sl_status`, `sl_name`, `sl_url`, `sl_img`) VALUES(?, ?, ?, ?, ?)");
			if($this->arrays->execute($data)){
				return $this->url_return(array('slider.php','Slider hasbeen added','success',$tkn));
					}else{
						return $this->url_return(array('slider.php','Slider not added '.$this->error,'error',$tkn));
					}				
		}
		
		
		
		public function delete_slider($delecte_id,$tkn){
			foreach($_POST['check_list'] as $check) {
				$this->arrays3 = $this->handeller->query("SELECT * FROM `slider` WHERE sl_id ='$check'");
				$row = $this->arrays3->fetch(PDO::FETCH_ASSOC);
				unlink('../'.$row['cl_img']);
				$this->arrays = $this->handeller->prepare("DELETE FROM `slider` WHERE sl_id = ? ");
				if($this->arrays->execute(array($check))){
					$this->url_return(array('slider.php','Slider Deleted', 'success',$tkn));
					}else{
						$this->url_return(array('slider.php','Slider Not Deleted', 'error',$tkn));
						}
    		}
		
		}
		
		
		
		public function edit_show_slider($slider_id){
				$return = array();
				$slider = $this->handeller->query("SELECT * FROM `slider` WHERE `sl_id` = '$slider_id'");
						foreach($slider as $ec){
							$p = array();							
							$p['title'] = $ec['sl_name'];
							$p['url'] = $ec['sl_url'];
							$p['img'] = $ec['sl_img'];
							if($ec['sl_status'] == '1'){
								$p['status'] = 'checked="checked"';
								}else {
									$p['status'] = '';
									}
							array_push($return,$p);
						}
						
				return $return;		
			}
		
		public function update_slider($sl_name,$sl_url,$st,$ie,$hidden_img,$tkn,$sl_id){
			if($_FILES[$ie]["size"] == 0 ){
			 $im = $hidden_img;
			 }else{
				 $im = $this->img_upload($ie,'../image/');
				 if($im == 10){
					 $this->error = 'Image couldnt upload!';
					 }
				   }
			$data = array($st,$sl_name,$sl_url,$im,$sl_id);
			$this->arrays = $this->handeller->prepare("UPDATE `slider` SET `sl_status`= ?,`sl_name` = ? ,`sl_url` = ? ,`sl_img`=? WHERE `sl_id` = ? ");
			if($this->arrays->execute($data)){
				$this->url_return(array('slider.php','Slider Update', 'success',$tkn));
					}else{
						$this->url_return(array('add_slider.php','Slider Not Update', 'error',$tkn));
					}
					}
			
		
			
	 }
?>