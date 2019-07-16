<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Absen_m extends CI_Model
{

    /*
        Prosedure Kelas 
        Ambil Data data Siswa berdasar Kelas 

    */
    function get_siswa_ByKelas($kelas)
    {
        $siswa_k = $this->db->get_where('t_siswa', ['kelas' => $kelas])->result_array();
        return $siswa_k;
    }

    /*
        Ambil data kelas 
    */

    function get_kelas() { 
        $kelas = $this->db->get('t_kelas')->result_array();
        return $kelas ;
    }


    function get_absen(){ 

        $ab = $this->db->get('t_absensi')->result_array();
        
        return $ab ; 


    }
}

/* End of file Absen_m.php */
