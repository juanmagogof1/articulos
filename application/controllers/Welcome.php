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
		$info['articulos'] = $this->Queries->getArticles('C');
		$this->load->view('Template/head');
		$this->load->view('Template/menu');
		$this->load->view('Articulos/allArticles',$info);
		$this->load->view('Template/footer');
		$this->load->view('Articulos/modalArticles',$info);

	}

	public function compras()
	{
		$this->load->view('Template/head');
		$this->load->view('Template/menu');
		$this->load->view('Compras/vistaCompra');
		$this->load->view('Template/footer');

	}

	public function getArticles(){
		$allArticles = $this->Queries->getArticles('F');
		print_r(json_encode($allArticles));
	}

	public function addArticle(){
		$data = json_decode(file_get_contents("php://input"), true);

		$result = $this->Queries->addArticle($data);
		
	}

	public function udtActP(){
		$data = json_decode(file_get_contents("php://input"), true);
		$result = $this->Queries->udtActP($data);
	}

	public function getProduct(){
		$data = json_decode(file_get_contents("php://input"), true);
		$result = $this->Queries->getProd($data);
		print_r(json_encode($result[0]));
	}
	
	public function udpArticle(){
		$data = json_decode(file_get_contents("php://input"), true);
		//print_r($data);
		$result = $this->Queries->udtProd($data);
		print_r(json_encode($result));
	}


}
