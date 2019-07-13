<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Siswa extends CI_controller { 

    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
            $this->load->model('Siswa_m' ,'siswa');
            
    }
   public function index(){
        $data['title'] = 'Siswa';
        $data['siswa'] = $this->siswa->get_siswa()->result_array();
            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidenav');
            $this->load->view('templates/navbar', $data);
            $this->load->view('siswa/index');
            $this->load->view('templates/footer');
   }
   // Tampil kan Data view Show 
   public function show() { 
        $data['title'] = 'Siswa';
        $id = $this->input->get('id');
        
        // cegat apa bila id nya tdk di isi ato langsung akses ke link 
        if($id !== null ){
            $data['siswa'] = $this->siswa->get_siswa_byId($id)->result_array();
            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidenav');
            $this->load->view('templates/navbar', $data);
            $this->load->view('siswa/show',$data);
            $this->load->view('templates/footer');
        }else { 
            show_404();
        }


   }
   // Tampil kan view Tambah 
   public function TambahSiswa(){  

    $data['title'] = 'Tambah Data Siswa';
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidenav');
        $this->load->view('templates/navbar', $data);
        $this->load->view('siswa/TambahSiswa');
        $this->load->view('templates/footer');

   }

   public function prosesTambah(){
       // Tangkap Semua Data form Post
        $siswa = [
            'nama'      => $this->input->post('nama' , true),
            'alamat'    => $this->input->post('alamat' , true),
            'nis'       => $this->input->post('nis' , true),
            'kelas'     => $this->input->post('kelas' , true ), 
            'jk'        => $this->input->post('jk' , true),
            'no_hp'     => $this->input->post('no_hp' , true)
              
        ];   
        $data = $this->siswa->insert_siswa($siswa);
    
   }
   // Controlle Untuk Hapus Data Siswa 
   // Terima Id dari url dengan Get 

   public function hapus_siswa(){
       $id =  $this->input->get('id');
       if($id !== null ) {
        $this->siswa->hapus_siswa($id);
       }else { 
           show_404();
       }
   }


}