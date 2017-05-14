<?php 
	
	require_once('db_class.php');
	
	class admin extends db{
		
		public function admin_login($un,$pw){
			$pw = md5($pw);
			$this->query = $this->handeller->query("SELECT * FROM `users` WHERE (user_username = '$un' AND user_password = '$pw')");
			$row = $this->query->rowCount();
			
				if($row > 0){
					$this->data = array($this->user_session_id(),$this->user_agent(),$this->user_ip(),$un,$pw);
					
					$this->query2 = $this->handeller->prepare("UPDATE `users` SET user_session_id = ?, user_agent = ?, user_ip = ? WHERE (user_username = ? AND user_password = ?)");
					$this->query2->execute($this->data);
					
					$this->query3 = $this->handeller->query("SELECT * FROM `users` WHERE (user_username = '$un' AND user_password = '$pw')");
					$row = $this->query3->fetch(PDO::FETCH_ASSOC);					
					$_SESSION['admin'] = $row;	
						$this->url_return(array('index.php','Successfully logged in','success',$this->secure_token($row['user_session_id'])));								
					}else{
						$this->url_return(array('login.php','Invalid Username or Password','error',$this->secure_token($row['user_session_id'])));
						}
			}	
			
			
		public function check_admin_login(){
			if(!isset($_SESSION['admin'])){
				return $this->url_return(array('login.php','Plz Log in to continue','error'));
				}
			}	
			
		public function check_admin_token($tkn){
			if($tkn != md5($_COOKIE["PHPSESSID"])){
				session_destroy();
				session_unset();
				return $this->url_return(array('login.php','Invalid Admin token','error'));
				}
			}			
		public function log_out(){
			if((isset($_GET['log-out'])) && ($_GET['log-out'] == 'true') && ($_GET['token'] == $this->secure_token($_COOKIE['PHPSESSID']))){
				session_destroy();
				session_unset();
				return $this->url_return(array('login.php','Loged Out','error'));
				}
		}
			
		public function admin_data($data){
			$this->data = $_SESSION['admin']; 
			return $this->data[$data];
			}
			
		public function admin_update($fn,$ln,$un,$ad,$ad2,$ie,$hidden_img,$tkn){
			if($_FILES[$ie]["size"] == 0 ){
			 $im = $hidden_img;
			 }else{
				 $im = $this->img_upload($ie,'../image/');
				 if($im == 10){
					 $this->error = 'Image couldnt upload!';
					 }
				   }										
			$data = array($fn,$ln,$un,$ad,$ad2,$im);
			$this->query = $this->handeller->prepare("UPDATE `users` SET `user_first_name` = ?, `user_last_name` = ?,`user_username` = ?, `user_address` = ?, `user_address2` = ?, `user_img` = ? ");
				
				if($this->query->execute($data) && $im != 10){
					return $this->url_return(array('index.php','Your Profile has been updated','success',$tkn));
					}else{
						return $this->url_return(array('admin_profile.php','Your Profile not updated '. $this->error,'eror',$tkn));
						}
				
			}
			public function update_user_password($o_pw,$n_pw,$c_pw,$tkn){
		  		if($n_pw == $c_pw){
		  		$o_pw = md5($o_pw);
		  		$n_pw = md5($n_pw);
				$this->arrays = $this->handeller->query("SELECT * FROM `users`");
		               $row = $this->arrays->fetch();
		  			 	$pass = $row['user_password'];		 		
		  			if($o_pw == $pass){
		  				$this->arrays = $this->handeller->query("UPDATE users SET `user_password`='$n_pw'");						
							$this->url_return(array('admin_pass.php','Update password succesfuly','error',$tkn));			  					
		  					}else{
		  						$this->url_return(array('admin_pass.php','Update password  Not succesfuly','error',$tkn));		  						
		  					}
							}else{
								$this->url_return(array('admin_pass.php','New Password and Confirm Password didnt match','error',$tkn));
		  		
		  		}
		      		}
			
		
		public function show_all_admins(){
			$this->query = $this->handeller->query("SELECT * FROM `users` WHERE `user_role` = '1'");
			return $this->query;
			}
			
		public function admin_count(){
			$this->query = $this->handeller->query("SELECT * FROM `users` WHERE `user_role` = '1'");
			$row = $this->query->rowCount();
			return $row;
			}	
			
		
			
								
			
		
		}
?>
