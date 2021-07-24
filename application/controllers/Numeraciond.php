<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Numeraciond extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('NumModelDiesel');
		$this->load->helper('form');
    	$this->load->helper('url');
	}
    
	public function index(){
		if($this->session->userdata('login')){

            $numeraciones = $this->NumModelDiesel->get();

            $this->load->view('components/header');
            $this->load->view('app/numeracionpetroleo', compact('numeraciones'));
            $this->load->view('components/footer');
        }else{
            $this->load->view('components/header');
            $this->load->view('error/nouser');
            $this->load->view('components/footer');
        }
    }

    public function agregar(){
        $precio_diesel = $_POST['precio_diesel'];
        $num_hoy = $_POST['num_hoy'];

        $res = $this->NumModelDiesel->test($num_hoy);
        //ayer
        $num_ayer = 0;

        if($res){
            foreach($res as $re){
                $num_ayer = $re->num_ayer;
            }
            
            $gal_vendidos = $num_hoy - $num_ayer;
            $t_precio = $gal_vendidos * $precio_diesel;

            //Agregar numeración
            $this->NumModelDiesel->add($num_hoy, $gal_vendidos, $t_precio);
            //Actualizar numeración de ayer
            $this->NumModelDiesel->update($num_hoy);
            redirect('numeraciond?success=exitoso');
        }else{
            redirect('numeraciond?error=noagregado');
        }

    }
}