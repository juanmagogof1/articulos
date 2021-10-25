<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articulos extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('QArticulos');
	}
	public function init($dataBase){
		$this->QArticulos->init('default');
	}

	public function index()
	{
		$info['articulos'] = $this->QArticulos->getArticles('C');
		$this->load->view('Template/head');
		if($this->session->userdata('userKind') != 0) 
			$this->load->view('Template/menu2');
		else
			$this->load->view('Template/menu');
		
		$this->load->view('Articulos/allArticles',$info);
		$this->load->view('Template/footer');
		$this->load->view('Articulos/modalArticles',$info);

	}

	public function getArticles(){
		$allArticles = $this->QArticulos->getArticles('F');
		print_r(json_encode($allArticles));
	}

	public function addArticle(){
		$data = json_decode(file_get_contents("php://input"), true);

		$result = $this->QArticulos->addArticle($data);
		
	}

	public function udtActP(){
		$data = json_decode(file_get_contents("php://input"), true);
		$result = $this->QArticulos->udtActP($data);
	}

	public function getProduct(){
		$data = json_decode(file_get_contents("php://input"), true);
		$result = $this->QArticulos->getProd($data);
		print_r(json_encode($result[0]));
	}
	
	public function udpArticle(){
		$data = json_decode(file_get_contents("php://input"), true);
		//print_r($data);
		$result = $this->QArticulos->udtProd($data);
		print_r(json_encode($result));
	}


}