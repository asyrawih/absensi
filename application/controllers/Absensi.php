<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Absensi extends CI_Controller
{



    public function __construct()
    {
        parent::__construct();
        $this->load->model('Absen_m', 'absen');
        $this->load->model('Siswa_m' , 'siswa');
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
        $kelas = $this->input->get('kelas', true);
        $data['title'] = "Absensi";
        $data['kelas'] = $this->absen->get_siswa_ByKelas($kelas);
        //Ambil jumlah kelas 
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('absen/absen');
        $this->load->view('templates/footer');
    }

    // Proses Data Absen 
    public function proses_ab()
    { 

       $data     = [] ; // Sediakan Array Kosong untuk data yang akan di push 
       $index = 0 ;  // untuk atur nomor index yang di push 
       $siswa = $this->input->post('siswa_id'); // tangkap nilai siswa_id untuk di looping nanti nya 
        foreach ($siswa as $siswa_id ) {
            // push $data dari nilai yang di tangkap dari form 
            array_push($data , [ 
                'siswa_id'  => $siswa_id,
                'hadir'     => $this->input->post('hadir')[$index], // Tangkap nilai Dari Form 
                'izin'      => $this->input->post('izin')[$index],
                'sakit'     => $this->input->post('sakit')[$index]
            ]);
            $index++;
        }
    
        echo json_encode($data);

    }
}

/* End of file Absensi.php */
