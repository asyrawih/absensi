<?php 



defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller {


    
    public function __construct()
    {
        parent::__construct();
        
    }
    
    //
    public function index()
    {
        $data['title'] = "Absensi";
    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('absen/index', $data);
        $this->load->view('templates/footer');
    }
    

}

/* End of file Absensi.php */
