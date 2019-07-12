<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*

    class Dashboard 
    Handle Semua Fungsi Untuk Mer Route 
    Halaman Yang Ada di sidemenu 

*/

class Dashboard extends CI_controller { 

   public function  __constructor() {
       parent::__constructor(); 
       
   }
   public function index(){
    
        $data['title'] = 'Aplikasi Absensi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav',$data);
        $this->load->view('templates/navbar' , $data);
        $this->load->view('Dashboard');
        $this->load->view('templates/footer');
   }

   public function siswa()
   {
        $data['title'] = 'Siswa';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav',$data);
        $this->load->view('templates/navbar' , $data);
        $this->load->view('siswa/index');
        $this->load->view('templates/footer');
   }

   public function guru()
   {
        $data['title'] = 'Guru';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav',$data);
        $this->load->view('templates/navbar' , $data);
        $this->load->view('guru/index');
        $this->load->view('templates/footer');
   }
   public function jadwal()
   {
        $data['title'] = 'Jadwal';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav',$data);
        $this->load->view('templates/navbar' , $data);
        $this->load->view('jadwal/index');
        $this->load->view('templates/footer');
   }
   public function absensi()
   {
        $data['title'] = 'Absensi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav',$data);
        $this->load->view('templates/navbar' , $data);
        $this->load->view('absensi/index');
        $this->load->view('templates/footer');
   }
   public function laporan()
   {
        $data['title'] = 'Laporan';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav',$data);
        $this->load->view('templates/navbar' , $data);
        $this->load->view('laporan/index');
        $this->load->view('templates/footer');
   }
   public function kelas()
   {
        $data['title'] = 'Kelas';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav',$data);
        $this->load->view('templates/navbar' , $data);
        $this->load->view('kelas/index');
        $this->load->view('templates/footer');
   }
   public function wali()
   {
        $data['title'] = 'Wali';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav',$data);
        $this->load->view('templates/navbar' , $data);
        $this->load->view('wali/index');
        $this->load->view('templates/footer');
   }
   public function settings()
   {
        $data['title'] = 'Settings';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav',$data);
        $this->load->view('templates/navbar' , $data);
        $this->load->view('settings/index');
        $this->load->view('templates/footer');
   } 

}