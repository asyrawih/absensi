<?php 

/*
Class Model untuk Siswa 
Sesuaikan Model Dengan field Database nya 
*/ 
defined('BASEPATH') OR exit('No direct script access allowed');
class Siswa_m extends CI_Model {

        // Select Data Siswa 
        public function get_siswa(){
            $data  = $this->db->get('t_siswa');
            return $data;
        }
        // Tambah Data Siswa
        // var $siswa di terima dari contriller siswa 
        // Menerima Data Dari form inputan 
        public function insert_siswa($siswa) { 

            $q = $this->db->insert('t_siswa', $siswa);
            if($q === true ) {  
                redirect('siswa','refresh');
            }
            
        }
        //Hapus Data Siswa 
        // var $id di dapat dari Controller Siswa 
        // dengan menerima Parameter id mengunakan 
        // get url id '?id=$id <= yang tertuju '
         public function hapus_siswa($id) { 
         $q = $this->db->delete('t_siswa' , ['siswa_id' => $id]);
         if($q === true ) { 
             
             redirect('siswa','refresh');
         }

         }

}

/* End of file Siswa_m.php */
