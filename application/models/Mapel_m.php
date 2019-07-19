<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Mapel_m extends CI_Model
{


    function get_mapel()
    {

        $data =  $this->db->get('t_mapel')->result_array();
        
        return $data ; 
    }
}

/* End of file Mapel_m.php */
