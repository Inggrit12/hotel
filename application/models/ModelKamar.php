<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelKamar extends CI_Model {

    public $namaKamar;
    public $hargaKamar;
    public $keterangan;
    public $kelas;
    public $akses;
    public $eula;

    public function insert_entry($data)
    {       
            $this->db->insert('kamar', $data);
    }

    public function get_all()
    {
        $query = $this->db->get('kamar');
        return $query;
        
    }

    public function get_all2()
    {
        $this->db->select('*');
        $this->db->from('kamar');
        $this->db->join('roomclass', 'kamar.kelas = roomclass.idKelas');
        $query = $this->db->get();
        return $query;   
    }
    public function detail_kamar($where,$table){		
        return $this->db->get_where($table,$where);
    }

    public function edit_kamar($where,$table){		
	return $this->db->get_where($table,$where);
    }

    public function update_kamar($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }	

    public function hapus_kamar($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
    }

}//end of class
