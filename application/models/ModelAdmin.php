<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelAdmin extends CI_Model {

    public $nim;
    public $nama;
    public $username;
    public $password;

    public function insert_entry($data)
    {       
            $this->db->insert('admin', $data);
    }

    public function get_all()
    {
        $query = $this->db->get('admin');
        return $query;
        
    }
}//end of class