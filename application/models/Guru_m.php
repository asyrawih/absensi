<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru_m extends CI_Model {


    public function get_guru() { 

       $guru =  $this->db->get('t_guru');
       
       return $guru->result_array();

    }
    

}

/* End of file Guru_m.php */
