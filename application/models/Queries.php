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

	public function addArticle($data){
		$query = "INSERT INTO catproductos(txtNomProd, ePrecioVenta, eStock) VALUES ('".$data['name']."',".$data['price'].",".$data['stock'].");";
		if($this->db->query($query))
			return true;
		else
			return false;
	}

}