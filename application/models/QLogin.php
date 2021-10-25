<?php 
class QLogin extends CI_Model{
	
	public function init($dataBase){
		$this->db = $this->load->database($database, TRUE);
	}

	public function login($data){
		$user = $data['txtUser'];
		$psw = sha1($data['txtPsw']);
		$query ="SELECT * FROM relusuario WHERE txtNombreCorto = '".$user."' AND txtPassword = '".$psw."' AND bActivo = 1";
		$result = $this->db->query($query);
		if($result->num_rows() > 0){
			$query2 ="SELECT * FROM vwusers WHERE usr = '".$user . "'";
			$usuario = $this->db->query($query2);
			return $usuario->result_array();
		}else{
			return false;
		}
	}

}