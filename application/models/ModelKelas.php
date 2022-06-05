<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelKelas extends CI_Model {

    public $idKelas;
    public $namaKelas;
    public $fasilitas;
    public $kebersihan;
    public $keamanan;
    public $pelayanan;
    public $internet;

    public function get_all()
    {
        $query = $this->db->get('roomclass');
        return $query;
        
    }

    public function insert_entry($data)
    {       
            $this->db->insert('roomclass', $data);
    }

    public function get_last_ten_entries()
    {
            $query = $this->db->get('entries', 10);
            return $query->result();
    }

    public function update_entry()
    {
            $this->title    = $_POST['title'];
            $this->content  = $_POST['content'];
            $this->date     = time();

            $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}//end of class
