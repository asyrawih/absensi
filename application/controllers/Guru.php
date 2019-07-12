<?php 



defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

    public function index()
    {

        // title sidenav dan header 
        $data['title'] = "Guru";
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidenav',$data);
        $this->load->view('templates/navbar' ,$data);
        $this->load->view('guru/index');
        $this->load->view('templates/footer');
        
    }

}

/* End of file Guru.php */
