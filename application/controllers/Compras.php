<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compras extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Queries');
	}
	public function init($dataBase){
		$this->Queries->init('default');
	}
	public function compras(){

		$this->load->view('Template/head');
		if($this->session->userdata('userKind') != 0) 
			$this->load->view('Template/menu2');
		else
			$this->load->view('Template/menu');
		$this->load->view('Compras/vistaCompra');
		$this->load->view('Template/footer');

	}


}