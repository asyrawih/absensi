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

    // hitung kehadiran siswa 

    public function hitung_kehadiran_siswa($siswa_id , $ket){

        // cek parameter kehadiran /hadir/sakit/izin ; 
        if($ket === 'hadir'){
            //Sediak kan Sql Dan passing query nya boss ku 
            $sql = "SELECT COUNT(ket) as kehadiran  FROM t_absensi WHERE siswa_id = '$siswa_id' AND ket = '$ket' " ; 
            // terima data dari sql Tampung ke varible $q 
            $q = $this->db->query($sql);
            // kembalikan nilai nya sebaris saja boss q 
            return $q->row_array(); 
        }elseif ($ket === 'sakit') {
           //Sediak kan Sql Dan passing query nya boss ku 
           $sql = "SELECT COUNT(ket) as kehadiran  FROM t_absensi WHERE siswa_id = '$siswa_id' AND ket = '$ket' " ; 
           // terima data dari sql Tampung ke varible $q 
           $q = $this->db->query($sql);
           // kembalikan nilai nya sebaris saja boss q 
           return $q->row_array(); 
        }else { 
            //Sediak kan Sql Dan passing query nya boss ku 
            $sql = "SELECT COUNT(ket) as kehadiran  FROM t_absensi WHERE siswa_id = '$siswa_id' AND ket = '$ket' " ; 
            // terima data dari sql Tampung ke varible $q 
            $q = $this->db->query($sql);
            // kembalikan nilai nya sebaris saja boss q     
            return $q->row_array(); 
        }

    }


}

/* End of file Absen_m.php */
