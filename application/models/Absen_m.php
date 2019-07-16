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

    //Save Data 
    // params nya Data dari controller 
    function save_ab($data) {
        try {
            $save = $this->db->insert_batch('t_absensi', $data); 
            redirect('absensi','refresh');
        } catch (\Throwable $th) {
           echo $th ; 
        }
     
        
    }
}

/* End of file Absen_m.php */
