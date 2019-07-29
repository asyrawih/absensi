<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {

       
        $this->load->view('templates/header');
        $this->load->view('auth/login');
        $this->load->view('templates/footer');
        
    }

}

/* End of file Login.php */
