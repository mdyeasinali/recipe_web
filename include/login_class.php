<?php
  require_once('db_class.php');
  class login extends db{
	  public function admin_login($un,$pw){
			$pw = md5($pw);
			$this->query = $this->handeller->query("SELECT * FROM `users` WHERE (user_username = '$un' AND user_password = '$pw') AND (user_role = '1')");
			$row = $this->query->rowCount();
			
				if($row > 0){
					$this->data = array($this->user_session_id(),$this->user_agent(),$this->user_ip(),$un,$pw,1);
					
					$this->query2 = $this->handeller->prepare("UPDATE `users` SET user_session_id = ?, user_agent = ?, user_ip = ? WHERE (user_username = ? AND user_password = ?) AND (user_role = ?)");
					$this->query2->execute($this->data);
					
					$this->query3 = $this->handeller->query("SELECT * FROM `users` WHERE (user_username = '$un' AND user_password = '$pw') AND (user_role = '1')");
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
  }
  
 ?>