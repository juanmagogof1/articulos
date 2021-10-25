<?php 
class QAdmin extends CI_Model 
{
	
	public function init($dataBase){
		$this->db = $this->load->database($database, TRUE);
	}

}