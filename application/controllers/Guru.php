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
        // Sedikan Data Dalam Bentuk Array Assoc 
        $data = [
            'nama_guru' => $this->input->post('nama_guru', true),
            'kd_guru'   => $this->input->post('kode', true),
            'no_hp'     => $this->input->post('nohp', true),
            'alamat'    => $this->input->post('alamat', true)
        ];
        // $data akan Di terima Di model 
        // dengan param $ guru 
        $this->guru->insert_guru($data);
    }
    // Hapus Data Guru Berdasarak Id 
    public function delete_guru()
    {
        $id = $this->input->get('id');
        $this->guru->delete_guru($id);
    }

    public function show()
    {
        $data['title'] = "Detail Guru";

        // Ambil Data Guru Berdasar Kan ID dan 
        $id = $this->input->get('id');
        // Ambil Satu baris Saja Dalam DB 
        $data['guru'] = $this->guru->get_guru_byID($id)->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('guru/show');
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['title'] = "Edit Data Guru";
        $data['guru']  = $this->guru->get_guru_byID($id)->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('guru/edit');
        $this->load->view('templates/footer');
    }

    public function update()
    {
        // Sedikan Data Dalam Bentuk Array Assoc 
        $data = [
            'nama_guru' => $this->input->post('nama_guru', true),
            'kd_guru'   => $this->input->post('kode', true),
            'no_hp'     => $this->input->post('nohp', true),
            'alamat'    => $this->input->post('alamat', true)
        ];
        $this->guru->update_guru($data);
        }       
}

/* End of file Guru.php */
