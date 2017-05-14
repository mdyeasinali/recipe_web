<?php 
	
	require_once('db_class.php');
	
	class information extends db{
		
	
		public function information_list(){
		 $return = array();
		 $this->arrays = $this->handeller->query("SELECT * FROM `information`");
			foreach($this->arrays as $us){
				$p = array();
				$p['id'] = $us['Information_id'];
				$p['it'] = $us['Information_title'];
				$p['is'] = $us['Information_sort_order'];
				array_push($return,$p);			
				}
			return $return;	
		}
	public function delete_information($tkn){
		foreach($_POST['check_list'] as $check) {
			$this->arrays3 = $this->handeller->query("SELECT * FROM `information` WHERE Information_id ='$check'");
			$row = $this->arrays3->fetch(PDO::FETCH_ASSOC);
             $this->arrays = $this->handeller->prepare("DELETE FROM `information` WHERE Information_id = ? ");			 		
				if($this->arrays->execute(array($check))){										
					 $this->url_return(array('information.php','information has been Delete','success',$tkn));
					}else{
						$this->url_return(array('information.php','information not Delete ','eror',$tkn));
					}
    		}
		
		}
		public function show_edit_info($info_id){
				$return = array();
				$cat = $this->handeller->query("SELECT * FROM `information` WHERE `Information_id` = '$info_id'");
						foreach($cat as $ec){
							$p = array();							
							$p['title'] = $ec['Information_title'];
							$p['info_des'] = $ec['Information_description'];
							$p['info_m_title'] = $ec['Information_meta_title'];							
							$p['info_m_des'] = $ec['Information_meta_description'];
							$p['info_m_key'] = $ec['Information_meta_keyword'];
							if($ec['Information_meta_Bottom'] == '1'){
								 $p['info_m_b'] = 'checked="checked"';
								}else{
									 $p['info_m_b'] = '';
									}
							array_push($return,$p);
						}
						
				return $return;		
		}
	
		public function add_information($it,$ifd,$mtt,$mtd,$mtk,$itop,$tkn){
			$seo_url = $this->get_clean_url($it);
			$data = array($it,$ifd,$mtt,$mtd,$mtk,$seo_url,$itop);
			$this->query = $this->handeller->prepare("INSERT INTO `information` (`Information_title`,`Information_description`,`Information_meta_title`,`Information_meta_description`,`Information_meta_keyword`,`Information_seo_keyword`,`Information_meta_Bottom`)VALUES(?, ?, ?, ?, ?, ?,?) ");	
			if($this->query->execute($data)){				
			return $this->url_return(array('information.php','information added','success',$tkn));
			}else{
				return $this->url_return(array('information.php','information Not added','error',$tkn));
				}
		}
		
		
		public function update_info($it,$ifd,$mtt,$mtd,$mtk,$ibtom,$tkn,$info_id){
			$seo_url = $this->get_clean_url($it);
			$data = array($it,$ifd,$mtt,$mtd,$mtk,$seo_url,$ibtom,$info_id);
			$this->arrays = $this->handeller->prepare("UPDATE `information` SET `Information_title`= ?,`Information_description`= ?,`Information_meta_title`= ?,`Information_meta_description` = ?,`Information_meta_keyword` = ?,`Information_seo_keyword`= ?,`Information_meta_Bottom`= ? WHERE `Information_id` = ? ");
		if($this->arrays->execute($data)){
			$this->url_return(array('information.php','information Update', 'success',$tkn));
				}else{
					$this->url_return(array('add_information.php','information Not Update', 'error',$tkn));
				}
			}
		
	}
		
		
		
			
?>