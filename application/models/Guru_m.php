<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru_m extends CI_Model
{

    // Ambil Data Guru 
    public function get_guru()
    {
        $guru =  $this->db->get('t_guru');
        return $guru->result_array();
    }

    public function get_guru_byID($id)
    {
        $data = $this->db->get_where('t_guru', ['guru_id' => $id]);
        return $data;
    }

    function hitung_guru()
    {

        $hitung =  $data = $this->db->count_all('t_guru');
        return $hitung;
    }

    //=========================== Proses ==========================// 
    // Terima Data Arr guru Dari Controller 
    public function insert_guru($guru)
    {
        $q = $this->db->insert('t_guru', $guru);
        if ($q === true) {
            redirect('guru', 'refresh');
        } else {
            show_404();
        }
    }
    // hapus Data Guru 
    public function delete_guru($id)
    {
        // Cek jika url di akes tampa id 
        if ($id !== null) {
            $q = $this->db->delete('t_guru', ['guru_id' => $id]);
            if ($q === true) {
                redirect('guru', 'refresh');
            }
        } else {
            show_404();
        }
    }

    public function update_guru($id,$guru)
    {

        // Cegat Akses Url Dengan parameter nulll 

        $url = $this->uri->segment(3);

        if ($url !== null) {
            $q = $this->db->update('t_guru', $guru , ['guru_id' => $id ]);
            if ($q === true) {
                redirect('guru', 'refresh');
            } else {
            echo "gagal";
            }
        } else {
            show_404();
        }
    }

}

/* End of file Guru_m.php */
