<?php
 //require_once('db_class.php');
 class newsletter extends db{	  
		public function news_list(){
		 $return = array();
		 $this->arrays = $this->handeller->query("SELECT * FROM `newsletter`");
			foreach($this->arrays as $adv){
				$p = array();
				$p['id'] = $adv['news_id'];
				$p['news_em'] = $adv['news_em'];
				$p['news_ip'] = $adv['news_ip'];					
				$p['news_user_agent'] = $adv['news_user_agent'];					
					if($adv['news_st'] == 1){
						$p['news_st'] = '<span class="label label-success">Subscribed</span>';
						}else {
							$p['news_st'] = '<span class="label label-important">Unsubscribed</span>';
							}
		
				array_push($return,$p);			
				}
			return $return;	
		}		
		
		
		 
		public function delete_news($delecte_id,$tkn){
			foreach($_POST['check_list'] as $check) {
				$this->arrays3 = $this->handeller->query("SELECT * FROM `newsletter` WHERE `news_id` ='$check'");
				$row = $this->arrays3->fetch(PDO::FETCH_ASSOC);
				unlink('../'.$row['ad_img']);
				$this->arrays = $this->handeller->prepare("DELETE FROM `newsletter` WHERE `news_id` = ? ");
				if($this->arrays->execute(array($check))){
					$this->url_return(array('newsletter.php','Newsletter Deleted', 'success',$tkn));
					}else{
						$this->url_return(array('newsletter.php','Newsletter Not Deleted', 'error',$tkn));
						}
    		}
		
		} 
		

		
			
	}
?>