<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('guru_m', 'guru');
    }
    public function index()
    {

        // title sidenav dan header 
        $data['title'] = "Guru";
        $data['guru'] = $this->guru->get_guru();;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('guru/index');
        $this->load->view('templates/footer');
    }

    public function TambahGuru()
    {
        $data['title'] = "Guru";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('guru/TambahGuru');
        $this->load->view('templates/footer');
    }

    public function proses_tambah()
    { 
        // Terima Data dari form POST
        $nama   = $this->input->post('nama_guru' ,true);
        $kode   = $this->input->post('kode' , true );
        $no_hp  = $this->input->post('nohp' , true);
        $alamat = $this->input->post('alamat' , true);
        // Sedikan Data Dalam Bentuk Array Assoc 
        $data = [
            'nama_guru' => $nama,
            'kd_guru'   => $kode , 
            'no_hp'     => $no_hp,
            'alamat'    => $alamat
        ]; 
    }
}

/* End of file Guru.php */
