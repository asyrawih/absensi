<?php

/*
Class Model untuk Siswa 
Sesuaikan Model Dengan field Database nya 
*/
defined('BASEPATH') or exit('No direct script access allowed');
class Siswa_m extends CI_Model
{

    // Select Data Siswa 
    public function get_siswa()
    {
        $data  = $this->db->get('t_siswa');
        return $data;
    }
    // Ambil Data Siswa berdasarkan id 
    // Terima $id dari controller Siswa
    public function get_siswa_byId($id)
    {

        $data = $this->db->get_where('t_siswa', ['siswa_id' => $id]);

        return $data;
    }
    // Tambah Data Siswa
    // var $siswa di terima dari contriller siswa 
    // Menerima Data Dari form inputan 
    public function insert_siswa($siswa)
    {

        $q = $this->db->insert('t_siswa', $siswa);
        if ($q === true) {
            redirect('siswa', 'refresh');
        }
    }

    // Update Data Siswa 
    // Var $siswa Di ambil Dri Controller update 
    // dengan method update_siswa

    public function update_siswa($id,$siswa)
    {

        // Cegat Akses Url Dengan parameter nulll 

        $url = $this->uri->segment(3);

        if ($url !== null) {
            $q = $this->db->update('t_siswa', $siswa , ['siswa_id' => $id ]);
            if ($q === true) {
                redirect('siswa', 'refresh');
            } else {
            echo "gagal";
            }
        } else {
            show_404();
        }
    }



    //Hapus Data Siswa 
    // var $id di dapat dari Controller Siswa 
    // dengan menerima Parameter id mengunakan 
    // get url id '?id=$id <= yang tertuju '
    public function hapus_siswa($id)
    {
        $q = $this->db->delete('t_siswa', ['siswa_id' => $id]);
        if ($q === true) {

            redirect('siswa', 'refresh');
        }
    }
    // Hitung Jumalah Siswa keselurahan Dalam Tabel 
    public function hitung_siswa()
    {

        $data = $this->db->count_all('t_siswa');
        return  $data;
    }
}

/* End of file Siswa_m.php */
