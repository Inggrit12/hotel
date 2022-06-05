<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class Login extends CI_Controller {

    public function index() {  
        // Fungsi Login  
        $valid = $this->form_validation;  
        $username = $this->input->post('username');  
        $password = $this->input->post('password');  
        $valid->set_rules('username','Username','required');  
	    $valid->set_rules('password','Password','required');  

        if($valid->run()) {  
            $this->simple_login->login($username,$password, base_url('admin'), base_url('login'));  
        }  
    	// End fungsi login  
        $this->load->view('login');  
    }  

    public function daftar(){
        $this->form_validation->set_rules('nim', 'NIM', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
			{
                $this->load->view('templates/header');
                $this->load->view('daftar');
                $this->load->view('templates/footer');
            }
            else
            {
                $data['nim']=$this->input->post('nim');
                $data['nama']=$this->input->post('nama');
                $data['username'] = $this->input->post('username');  
                $data['password'] = md5($this->input->post('password'));  

				$this->ModelAdmin->insert_entry($data);
            	redirect('user');
            }
    }

    public function logout(){  
        $this->simple_login->logout();  
    }                 
}  
