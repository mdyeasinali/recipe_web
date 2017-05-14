<?php 
	session_start();	
	
	class db extends PDO{
		
		/*-------------- Proparty Area -------------*/
		
		public $handeller;
		public $query;
		public $arrays;
		public $arrays2;
		public $arrays3;
		public $query2;
		public $query3;
		public $loged;
		
		private $host;
		private $user;
		private $password;
		private $db;
		private $user_ip;
		private $user_session_id;
		private $user_agent;
		
		protected $data;
		protected $error;
		
		
		/*-------------- End Proparty Area -------------*/
		
	
		
		/*-------------- Methodes Area -------------*/
		
		public function __construct(){
			$this->host = 'localhost';
			$this->user = 'root';
			$this->password = '';
			$this->db = 'hitechwe_recipe';
				
				try{
					$this->handeller = new PDO("mysql:host={$this->host}; dbname={$this->db}", $this->user, $this->password);
					$this->handeller->getAttribute(PDO::ATTR_ERRMODE);
					}catch(PDOException $e){
						die($e);
						}
				
			
			}
			
		public function url_return(array $a){
			$this->data = header('location:'.$a[0].'?msg='.$a[1].'&type='.$a[2].'&token='.$a[3]);
			return $this->data;
			}
			
		public function fontendurl_return(array $a){
			$this->data = header('location:'.$a[0].'?msg='.$a[1]);
			return $this->data;
			}	
			
		protected function user_ip(){
			$this->data = $_SERVER['REMOTE_ADDR'];
			return $this->data;
			}	
			
		protected function user_session_id(){
			$this->data = $_COOKIE["PHPSESSID"];
			return $this->data;
			}	
			
		protected function user_agent(){
			$this->data = $_SERVER['HTTP_USER_AGENT'];
			return $this->data;
			}	
			
		public function secure_token($tk){
			$this->data = md5($tk);
			return $this->data;
			}	
			
		public function globals(){
			global $_;
			$_['action'] = $_SERVER['PHP_SELF'];
			$_['base_url'] = 'http://'.$_SERVER['HTTP_HOST'].'recipe_web/';
			$_['url_prm'] = '?token='.$_REQUEST['token'];
			}	
			
		public function site_globals(){
			global $_;
			$_['action'] = $_SERVER['PHP_SELF'];
			$_['base_url'] = 'http://'.$_SERVER['HTTP_HOST'].'recipe_web/';
			}	
			
		protected function img_upload($img,$path){
			if ((($_FILES[$img]["type"] == "image/gif")
			|| ($_FILES[$img]["type"] == "image/jpeg")
			|| ($_FILES[$img]["type"] == "image/jpg")
			|| ($_FILES[$img]["type"] == "image/pjpeg")
			|| ($_FILES[$img]["type"] == "image/x-png")
			|| ($_FILES[$img]["type"] == "image/png"))
			&& ($_FILES[$img]["size"] < 2000000))
			  {
			  if ($_FILES[$img]["error"] > 0)
				{
				$this->error = 10;
				return $this->error;
				}
			  else
				{
				$rnd = rand(0,99999);		
				if (file_exists($path. $_FILES[$img]["name"]))
				  {
				      move_uploaded_file($_FILES[$img]["tmp_name"],$path. $rnd. $_FILES[$img]["name"]);
					  return 'image/'. $rnd . $_FILES[$img]["name"];
					  
				  }
				else
				  {
					  move_uploaded_file($_FILES[$img]["tmp_name"],$path. $_FILES[$img]["name"]);
					  return 'image/'. $_FILES[$img]["name"];
				  }
				}
			  }
			else
			  {
			 $this->error = 10;
			  return $this->error;
			  }
			}	
			
			
		public function email_temp($to,$message,$subject){
				$message = $message;
				$headers = "From: RecipeHut \r\n" .
			   'Reply-To: '. $_['base_url']. "\r\n" .
			   'X-Mailer: PHP/' . phpversion();				
				$message = wordwrap($message, 70, "\r\n");				
				mail($to, $subject, $message, $headers);
			}		
		
		/*-------------- End Methodes Area -------------*/
		public function get_clean_url($str) {
		$this->arrays = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $str);
		$this->arrays= strtolower(trim($this->arrays, '-'));
		$this->arrays = preg_replace("/[\/_|+ -]+/", '-', $this->arrays);	
		return $this->arrays;
		}
		
		
		
}	




				
		
?>