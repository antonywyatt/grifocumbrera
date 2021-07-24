<?php
class NumModelDiesel extends CI_Model {
    function __construct(){
        $this->load->database();
    }

    //obtener numeracion
    public function get(){
        $numeraciones = $this->db->query('SELECT * FROM num_petroleo ORDER BY fecha DESC;')->result();
        return $numeraciones;
    }

    public function test($num_hoy){
        $query = $this->db->query('SELECT * FROM num_ayer_petroleo WHERE '.$num_hoy.' >= num_ayer LIMIT 1')->result();
        return $query;
    }

    public function add($num_hoy, $gal_vendidos, $t_precio){
        $this->db->query('INSERT INTO `num_petroleo` (`num_hoy`, `gal_vendidos`, `t_precio`, `fecha`) 
                            VALUES ('.$num_hoy.','.$gal_vendidos.','.$t_precio.', NOW() )');
    }

    public function update($num_hoy){
        $this->db->query('UPDATE num_ayer_petroleo SET num_ayer = '.$num_hoy.', fecha = NOW() WHERE id = 1');
    }
}