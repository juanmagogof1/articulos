<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Queries');
	}
	public function init($dataBase){
		$this->Queries->init('default');
	}
	public function index()
	{
		$data['articulos']	= $this->Queries->getArticles();
		
		$this->load->view('welcome_message',$data);
	}

}
