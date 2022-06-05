<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class User extends CI_Controller {

    public function index() {  
        $this->load->view('templates/sidebar');
		$this->load->view('templates/header');
        $this->load->view('beranda');
		$this->load->view('templates/footer');
    }
}//endofclass  