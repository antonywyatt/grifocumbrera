<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('LoginModel');
		$this->load->helper('form');
    	$this->load->helper('url');
	}

	public function index()
	{
		if($this->session->userdata('login')){
			$this->load->view('components/header');
			$this->load->view('components/home');
			$this->load->view('components/footer');
		}else{
			$this->load->view('components/header');
			$this->load->view('error/nouser');
			$this->load->view('components/footer');
		}
	}
}