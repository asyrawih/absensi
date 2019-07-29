<?php

use PhpOffice\PhpSpreadsheet\Shared\Date;

defined('BASEPATH') or exit('No direct script access allowed');

class Absen_m extends CI_Model
{

    /*

        Ambil Data berdasarkan filter tanggal dan kelas 

    */

    function get_kelas_tanggal()
    {

        $kelas = $this->input->get('kelas');
        $tanggal = $this->input->get('tanggal');
        $mapel = $this->input->get('mapel');

        // query cari data degnan relasi ; 
        // cek tanggal dan kelas jika kosong 

        if (empty($kelas) and empty($tanggal)) {
            $sql = "SELECT DISTINCT

                    nama , 
                    nis , 
                    tanggal , 
                    ket , 
                    nama_mapel 
                 FROM t_siswa , t_absensi , t_mapel ";

            return   $this->db->query($sql)->result_array();
        } else {

            $sql = "SELECT 

                    nama , 
                    ket , 
                    tanggal , 
                    nama_mapel , 
                    kelas , 
                    nis
                    
                    from t_absensi 
                        LEFT JOIN t_siswa on t_absensi.siswa_id = t_siswa.siswa_id 
                        LEFT JOIN t_mapel on t_absensi.mapel_id = t_mapel.mapel_id
                        WHERE kelas = '$kelas' AND tanggal = '$tanggal' and nama_mapel = '$mapel'
                        order by 
                            nama";

            return  $this->db->query($sql)->result_array();
        }
    }


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

    function get_kelas()
    {
        $kelas = $this->db->get('t_kelas')->result_array();
        return $kelas;
    }

    //Save Data 
    // params nya Data dari controller 
    function save_ab($data)
    {

        $mapel_id = $this->input->post('mapel');
        $tanggal = date('Y-m-d');
        $siswa_id = $this->input->post('siswa_id');
        //cek row yang data nya sama dengan inputan post 

        $query = $this->db->get_where('t_absensi', ['tanggal' => $tanggal, 'mapel_id' => $mapel_id, 'siswa_id' => $siswa_id[0]])->num_rows();
        // jika row nya lebih dari nol artinya lebih dari satu baris 

        if ($query > 0) {
            $this->session->set_userdata('pesan', 'gagal!');
            redirect('absensi', 'refresh');
        } else {
            $this->session->set_userdata('berhasil', 'Absen Berhasil!');
            $this->db->insert_batch('t_absensi', $data);
            redirect('absensi', 'refresh');
        }



        // Cek absensen hanya sekali saja 

    }

    // hitung kehadiran siswa 

    public function hitung_kehadiran_siswa($siswa_id, $ket)
    {

        // cek parameter kehadiran /hadir/sakit/izin ; 
        if ($ket === 'hadir') {
            //Sediak kan Sql Dan passing query nya boss ku 
            $sql = "SELECT COUNT(ket) as kehadiran  FROM t_absensi WHERE siswa_id = '$siswa_id' AND ket = '$ket' ";
            // terima data dari sql Tampung ke varible $q 
            $q = $this->db->query($sql);
            // kembalikan nilai nya sebaris saja boss q 
            return $q->row_array();
        } elseif ($ket === 'sakit') {
            //Sediak kan Sql Dan passing query nya boss ku 
            $sql = "SELECT COUNT(ket) as kehadiran  FROM t_absensi WHERE siswa_id = '$siswa_id' AND ket = '$ket' ";
            // terima data dari sql Tampung ke varible $q 
            $q = $this->db->query($sql);
            // kembalikan nilai nya sebaris saja boss q 
            return $q->row_array();
        } else {
            //Sediak kan Sql Dan passing query nya boss ku 
            $sql = "SELECT COUNT(ket) as kehadiran  FROM t_absensi WHERE siswa_id = '$siswa_id' AND ket = '$ket' ";
            // terima data dari sql Tampung ke varible $q 
            $q = $this->db->query($sql);
            // kembalikan nilai nya sebaris saja boss q     
            return $q->row_array();
        }
    }
}

/* End of file Absen_m.php */
