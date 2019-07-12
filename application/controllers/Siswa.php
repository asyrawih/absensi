<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Siswa extends CI_controller { 

   public function  __constructor() {
       parent::__constructor(); 
       
       
   }

   public function index(){
        $data['title'] = 'Siswa';
            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidenav');
            $this->load->view('templates/navbar', $data);
            $this->load->view('siswa/index');
            $this->load->view('templates/footer');
   }


   public function TambahSiswa()
   {
       
    $data['title'] = 'Tambah Data Siswa';
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidenav');
        $this->load->view('templates/navbar', $data);
        $this->load->view('siswa/TambahSiswa');
        $this->load->view('templates/footer');

   }

   public function prosesTambah()
   {
       
   }


}