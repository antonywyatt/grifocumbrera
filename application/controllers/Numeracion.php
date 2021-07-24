<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Numeracion extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('NumModel');
		$this->load->helper('form');
    	$this->load->helper('url');
	}
    
	public function index(){
		if($this->session->userdata('login')){

            $numeraciones = $this->NumModel->get();

            $this->load->view('components/header');
            $this->load->view('app/numeraciongasohol', compact('numeraciones'));
            $this->load->view('components/footer');
        }else{
            $this->load->view('components/header');
            $this->load->view('error/nouser');
            $this->load->view('components/footer');
        }
    }

    public function agregar(){
        $precio_gasohol = $_POST['precio_gas'];
        $num_hoy = $_POST['num_hoy'];

        $res = $this->NumModel->test($num_hoy);
        //ayer
        $num_ayer = 0;

        if($res){
            foreach($res as $re){
                $num_ayer = $re->num_ayer;
            }
            
            $gal_vendidos = $num_hoy - $num_ayer;
            $t_precio = $gal_vendidos * $precio_gasohol;

            //Agregar numeración
            $this->NumModel->add($num_hoy, $gal_vendidos, $t_precio);
            //Actualizar numeración de ayer
            $this->NumModel->update($num_hoy);
            redirect('numeracion?success=exitoso');
        }else{
            redirect('numeracion?error=noagregado');
        }

    }
}