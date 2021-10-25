<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('QLogin');
	}
	public function init($dataBase){
		$this->QLogin->init('default');
	}

	public function login(){

		$this->load->view('Template/head');
		$this->load->view('Login/login');
		$this->load->view('Template/footer');
	}


	public function log_in(){
		if(isset($_POST['btnIngresar'])){
			$result = $this->QLogin->login($_POST);
			$data = [
				'usuario' => $result[0]['usr'],
				'nombre' => $result[0]['nombre'],
				'apellidos' => $result[0]['apellidos'],
				'RFC' => $result[0]['RFC'],
				'tipo' => $result[0]['tipo'],
				'userKind' => $result[0]['eTipo'],
				'eIdUsr' => $result[0]['eIdUsr'],
				'eIdPer' => $result[0]['eIdPer']
			];
			$this->session->set_userdata($data);
			if($data['userKind'] == 1){
				header("Location:".site_url('admin'));
			}
			
			
		}
		if(isset($_POST['btnRegistrarme'])){
			$this->registro();
		}


	}

	public function logout(){
		$this->session->sess_destroy();
		$this->index();
	}

	public function registro(){
		echo "Bienvenido a registro";
	}

}