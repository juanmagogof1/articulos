<?php 
class Queries extends CI_Model 
{
	
	public function init($dataBase){
		$this->db = $this->load->database($database, TRUE);
	}
	

	public function getArticles($data){
		if($data == 'C')$articulos = $this->db->query('SELECT * FROM catproductos');
		if($data == 'F')$articulos = $this->db->query('SELECT * FROM catproductos WHERE bActivo = 1');
		return $articulos->result_array();
	}

	public function addArticle($data){
		$query = "INSERT INTO catproductos(txtNomProd, ePrecioVenta, eStock) VALUES ('".$data['name']."',".$data['price'].",".$data['stock'].");";
		if($this->db->query($query))
			return true;
		else
			return false;
	}

	public function udtActP($data){
		$query = "SELECT bActivo FROM catproductos WHERE eIdProducto =" . $data['id'];
		$result = $this->db->query($query);
		if($result->num_rows() > 0){
			$id=$result->result_array();
			if($id[0]['bActivo'] == 1 )
				$act = 0;
			else 
				$act = 1;
		}else{
			echo false;
		}
		if($data['acc']==1){
			$query2 = "UPDATE catproductos SET bActivo = ".$act." WHERE eIdProducto =" . $data['id'];
		}
		else{
			$query2 = "DELETE FROM catproductos WHERE eIdProducto =" . $data['id'];
		}
		
		if($this->db->query($query2))
			echo true;
		else
			echo false;


	}

	public function getProd($data){
		$query = "SELECT * FROM catproductos WHERE eIdProducto = ". $data['id'];
		$result = $this->db->query($query);
		if($result->num_rows() > 0){
			return $result->result_array();
		}
		else
			return false;
	}

	public function udtProd($data){
		$query = "UPDATE catproductos SET txtNomProd= '".$data['name']."',ePrecioVenta= ".$data['price'].",eStock= ".$data['stock'].",fhActualizacion=NOW() WHERE eIdProducto =" .  $data['id'];
		
		if($this->db->query($query)){
			return true;
		}
		else
			return false;
	}

}