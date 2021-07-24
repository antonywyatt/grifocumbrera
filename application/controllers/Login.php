<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('LoginModel');
		$this->load->helper('form');
    	$this->load->helper('url');
	}

	public function index()
	{
		$usuario = $_POST['user'];
        $password = $_POST['password'];
		$res = $this->LoginModel->login($usuario, $password);

		if (!$res){
			redirect('Home?error=1');
		}else{
			$data = array(
				'id' => $res->id,
				'username' => $res->username,
				'pass' => $res->pass,
				'nombre' => $res->nombre,
				'login' => TRUE
			);

			$this->session->set_userdata($data);
			redirect('Home');
		}
	}

	public function logout(){
		session_destroy();
		redirect('Home');
	}
}