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
	public function login()
	{
		
		$this->load->view('Template/head');
		$this->load->view('Login/login');
		$this->load->view('Template/footer');
	}
	public function index()
	{
		
		$this->load->view('Template/head');
		$this->load->view('Template/menu');
		$this->load->view('Articulos/allArticles');
		$this->load->view('Template/footer');
	}

	public function getArticles(){
		$allArticles = $this->Queries->getArticles();
		print_r(json_encode($allArticles));
	}

}
