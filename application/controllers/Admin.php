<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('QAdmin');
	}
	public function init($dataBase){
		$this->QAdmin->init('default');
	}

	public function admin(){
		$this->load->view('Template/head');
		$this->load->view('Template/menu2');
		$this->load->view('Admin/adminPpal');
		$this->load->view('Template/footer');

	}

}