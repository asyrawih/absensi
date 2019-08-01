<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Absensi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Absen_m', 'absen');
        $this->load->model('Siswa_m', 'siswa');
        $this->load->model('Mapel_m', 'mapel');
    }

    //
    public function index()
    {
        $data['title'] = "Absensi";

        //Ambil jumlah kelas 
        $data['kelas'] = $this->absen->get_kelas();
        $data['mapel'] = $this->mapel->get_mapel();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('absen/index');
        $this->load->view('templates/footer', $data);
    }
    public function absen_kelas()
    {

        $kelas = $this->input->get('kelas', true);
        $data['title'] = "Absensi";
        $data['kelas'] = $this->absen->get_siswa_ByKelas($kelas);
        $data['mapel'] = $this->mapel->get_mapel();
        //Ambil jumlah kelas 
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('absen/absen', $data);
        $this->load->view('templates/footer');
    }
    public function edit()
    {
        $kelas = $this->input->get('kelas', true);
        $data['title']  = "Edit Data Absensi ";
        $data['kelas'] = $this->absen->get_kelas();
        $data['mapel'] = $this->mapel->get_mapel();
        //get kelas dan tanggal 
        $data['data'] = $this->absen->get_kelas_tanggal();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('absen/edit');
        $this->load->view('templates/footer', $data);
    }

    // Proses Data Absen 
    public function proses_ab()
    {
        $data     = []; // Sediakan Array Kosong untuk data yang akan di push 
        $siswa = $this->input->post('siswa_id');
        $ket = $this->input->post('ket');
        $tanggal = date('Y-m-d');
        $mapel = $this->input->post('mapel');
        
        // tangkap nilai siswa_id untuk di looping nanti nya 
        $index = 0;
        foreach ($siswa as $siswa_id) {
            array_push($data, array(
                'siswa_id'  => $siswa[$index],
                'ket'     => $ket[$index],
                'tanggal'   => $tanggal,
                'mapel_id'  => $mapel

            ));
            $index++;
        }
        $this->absen->save_ab($data);
    }

    public function update(){
        $id = $this->uri->segment(3);
        $data['title'] = "Update Absensin ";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('absen/update');
        $this->load->view('templates/footer', $data);
    }
        
}


/* End of file Absensi.php */
