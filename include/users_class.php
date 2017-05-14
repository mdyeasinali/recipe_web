<?php 
	
	require_once('db_class.php');
	
	class users extends db{
		
		public function add_user($fn,$ln,$em,$un,$pw,$ad,$ad2,$tkn,$ie){			
			   $im = $this->img_upload($ie,'../image/');
				if($im == 10){
						$this->error = 'Image couldnt upload!';
					}
				$pw = md5($pw);	
				$sid = $this->user_session_id();
				$u_agent = $this->user_agent();
				$uip = $this->user_ip();
				$urol = '2';
				$data = array($fn,$ln,$em,$un,$pw,$ad,$ad2,$im,$sid,$u_agent,$uip,$urol );
							
				$this->query = $this->handeller->prepare("INSERT INTO `users`(`user_first_name`,`user_last_name`,`user_email`,`user_username`,`user_password`,`user_address`,`user_address2`,`user_img`,`user_r_date`,`user_session_id`,`user_agent`,`user_ip`,`user_role`) VALUES( ?, ?, ?, ?, ?, ?, ?, ?,NOW(),?, ?, ?, ?);");
				
				if($this->query->execute($data) && $im != 10){
					return $this->url_return(array('users.php','User has been added','success',$tkn));
					}else{
						return $this->url_return(array('users.php','User not added '. $this->error,'eror',$tkn));
					}
			}
			public function update_show_user($u_id){
				$return = array();
				$advertise = $this->handeller->query("SELECT * FROM `users` WHERE `user_id` = '$u_id'");
						foreach($advertise as $ec){
							$p = array();							
							$p['fname'] = $ec['user_first_name'];
							$p['lname'] = $ec['user_last_name'];
							$p['uname'] = $ec['user_username'];
							$p['upass'] = $ec['user_password'];
							$p['uemail'] = $ec['user_email'];
							$p['uadd'] = $ec['user_address'];
							$p['uadd2'] = $ec['user_address2'];
							$p['user_img'] = $ec['user_img'];
							array_push($return,$p);
						}
						
				return $return;		
		}
		public function user_list(){
		 $return = array();
		 $this->arrays = $this->handeller->query("SELECT * FROM `users`");
			foreach($this->arrays as $us){
				$p = array();
				$p['id'] = $us['user_id'];
				$p['un'] = $us['user_username'];
				$p['uemail'] = $us['user_email'];
				$p['u_img'] = $us['user_img'];
				array_push($return,$p);			
				}
			return $return;	
		}
			
			
			
			
			
		public function delete_users($tkn){
		foreach($_POST['check_list'] as $check) {
			$this->arrays3 = $this->handeller->query("SELECT * FROM `users` WHERE user_id ='$check'");
			$row = $this->arrays3->fetch(PDO::FETCH_ASSOC);
			unlink($row['user_img']);
             $this->arrays = $this->handeller->prepare("DELETE FROM `users` WHERE user_id = ? ");			 		
				if($this->arrays->execute(array($check))){										
					return $this->url_return(array('users.php','Partner has been added','success',$tkn));
					}else{
						return $this->url_return(array('users.php','Partner not added '. $this->error,'eror',$tkn));
					}
    		}
		
		}
	public function users_update($fn,$ln,$em,$un,$ad,$ad2,$ie,$hidden_img,$tkn,$u_id){
		$im = $hidden_img;
				if($_FILES[$ie]["size"] == 0 ){
				$im = $hidden_img;
				}else{
					$im = $this->img_upload($ie,'../image/');
					if($im == 10){
						$this->error = 'Image couldnt upload!';
						}
					}
										
			$data = array($fn,$ln,$em,$un,$ad,$ad2,$im,$u_id);
			$this->query = $this->handeller->prepare("UPDATE `users` SET `user_first_name` = ?,`user_last_name`= ?,`user_email`= ?,`user_username`= ?,`user_address`= ?,`user_address2`= ?,`user_img`= ? WHERE `user_id` = ?");
				
				if($this->query->execute($data) ){
					return $this->url_return(array('users.php','Your Profile has been updated','success',$tkn));
					}else{
						return $this->url_return(array('users.php','Your Profile not updated '. $this->error,'eror',$tkn));
						}
				
			}
		
		
	  
		
				
	}
	
	?>