<?php 
class Queries extends CI_Model 
{
	
	public function init($dataBase){
		$this->db = $this->load->database($database, TRUE);
	}
	

	public function getArticles(){
		$articulos = $this->db->query('SELECT * FROM catproductos');
		return $articulos->result_array();
	}

}