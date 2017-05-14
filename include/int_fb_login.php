<?php 
	//require_once('db_class.php');
	
	 class intFblogin extends db{
		
		public function check_fb_user($em){
			$this->arrays = $this->handeller->query("SELECT * FROM `customers` WHERE (`fb_id` = '$em')");
			$r = $this->arrays->rowCount();
			if($r > 0){
				return '1';
				}else{
					return '0';
					}
			}
			
		public function addFb_user($id,$name){
			$agent = $this->user_agent();
			$ip = $this->user_ip();
			$data = array($name,$agent,$ip,$id);
			$this->arrays = $this->handeller->prepare("INSERT INTO `customers` ( `customers_first_name`, `customers_date`, `customers_agent`, `customers_ip`, `fb_id` ) VALUES( ?, NOW(), ?, ?, ?)");
			$this->arrays->execute($data);
			}	
			
			
	
			
			
		
}	
?>