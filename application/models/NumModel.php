<?php
class NumModel extends CI_Model {
    function __construct(){
        $this->load->database();
    }

    //obtener numeracion
    public function get(){
        $numeraciones = $this->db->query('SELECT * FROM num_gas ORDER BY fecha DESC;')->result();
        return $numeraciones;
    }

    public function test($num_hoy){
        $query = $this->db->query('SELECT * FROM num_ayer_gas WHERE '.$num_hoy.' >= num_ayer LIMIT 1')->result();
        return $query;
    }

    public function add($num_hoy, $gal_vendidos, $t_precio){
        $this->db->query('INSERT INTO `num_gas`(`num_hoy`, `gal_vendidos`, `t_precio`, `fecha`) 
                            VALUES ('.$num_hoy.','.$gal_vendidos.','.$t_precio.', NOW() )');
    }

    public function update($num_hoy){
        $this->db->query('UPDATE num_ayer_gas SET num_ayer = '.$num_hoy.', fecha = NOW() WHERE id = 1');
    }
}