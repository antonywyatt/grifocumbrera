<?php
class LoginModel extends CI_Model {
    function __construct(){
        $this->load->database();
    }

    public function login($usuario, $password) {
        $this->db->where("username", $usuario);
        $this->db->where("pass", $password);

        $resultado = $this->db->get("usuario");
        if($resultado->num_rows() > 0){
            return $resultado->row();
        }else{
            return false;
        }
    }
}