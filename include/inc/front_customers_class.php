<?php 
require_once('../include/db_class.php');
class customer extends db{
	public function customers_login($em,$pw){
		$pw = md5($pw);
			$this->query = $this->handeller->query("SELECT * FROM `customers` WHERE (`customers_email` = '$em' AND `customers_password` = '$pw'  )");
			$row = $this->query->rowCount();			
				if($row > 0){				
					$row2 = $this->query->fetch(PDO::FETCH_ASSOC);					
					$_SESSION['loged'] = $row2;			
						$this->fontendurl_return(array('index.php','Login Successfully'));													
					}else{						
						$this->fontendurl_return(array('login.php','Invalid Username or Password'));
						}
			
		}
		public function check_customer_login(){
			if(!isset($_SESSION['loged'])){
				return $this->fontendurl_return(array('login.php','Plz Log in to continue'));
				}
			}
	
		public function loged(){
			if(isset($_SESSION['loged'])){
				$this->loged = $_SESSION['loged'];
					return $this->loged;				
				}else{
					return false;
					
					}
				
			
			}
			
			
		
	public function customers_register($em,$pw){
		$pw = md5($pw);
		$agent = $this->user_agent();
		$ip = $this->user_ip();
		$data = array($em,$pw,$agent,$ip);
		$this->arrays = $this->handeller->prepare("INSERT INTO `customers`(`customers_email` , `customers_password`, `customers_date`, `customers_agent`, `customers_ip`)VALUES( ?, ?, NOW(), ?, ?)");
		if($this->arrays->execute($data)){
			$this->fontendurl_return(array('index.php','registration Successfully'));													
					}else{						
						$this->fontendurl_return(array('register.php','Registration Not Successfully'));
						}
			
		}
}
	
?>
