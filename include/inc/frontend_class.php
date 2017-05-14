<?php
 require_once('../include/db_class.php');
 class frontend extends db{
	 
	 public function show_slider(){
		 $return = array();
		 $this->arrays = $this->handeller->query("SELECT * FROM `slider`");
			foreach($this->arrays as $sl){
				$p = array();
				$p['img'] = $sl['sl_img'];
				array_push($return,$p);			
				}
			return $return;	
		 }
	  
}
?>