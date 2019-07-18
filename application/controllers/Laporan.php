<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {


    public function index()
    {
      $data['title'] = "Laporan";
      $this->load->view('templates/header', $data );
      $this->load->view('templates/sidenav' ,$data);
      $this->load->view('templates/navbar');
      $this->load->view('laporan/index');
      $this->load->view('templates/footer');
    }

}

/* End of file Laporan.php */
