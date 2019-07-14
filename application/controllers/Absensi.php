<?php 



defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller {


    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Absen_m' , 'absen');
        
    }
    
    //
    public function index()
    {
        $data['title'] = "Absensi";
        //Ambil jumlah kelas 
        $data['kelas'] = $this->absen->get_kelas();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('absen/index');
        $this->load->view('templates/footer');
    }


    public function absen_kelas()
    {
        $kelas = $this->input->get('kelas',true);
        $data = $this->absen->get_siswa_ByKelas($kelas);
        var_dump($data);
    }


    public function proses_absen()
    {
        
        $data = $_REQUEST ; 
        

        var_dump($data);

    }
    

}

/* End of file Absensi.php */
