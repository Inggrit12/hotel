<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
    {
        parent::__construct();
		$this->load->model('ModelKamar');
		$this->load->model('ModelKelas');
		$this->simple_login->cek_login();

		
    }

	public function index()
	{
		$data['query']=$this->ModelKamar->get_all2();
		$this->load->view('templates/sidebar');
		$this->load->view('templates/header',$data);
		$this->load->view('dashboard',$data);
		$this->load->view('templates/footer');
	}

	public function inputKamar()
	{
		$this->form_validation->set_rules('namaKamar', 'Nama Kamar', 'required');
		$this->form_validation->set_rules('harga', 'Harga Kamar', 'required');
		$this->form_validation->set_rules('ket', 'Keterangan', 'required');
		$this->form_validation->set_rules('eula', 'Eula', 'required');

		if ($this->form_validation->run() == FALSE)
			{
				$data['query']=$this->ModelKelas->get_all();
				$this->load->view('templates/sidebar');
		        $this->load->view('templates/header',$data);
                $this->load->view('formKamar',$data);
				$this->load->view('templates/footer');
            }
            else
            {
				$data['namaKamar']=$_POST['namaKamar'];
				$data['hargaKamar']=$_POST['harga'];
				$data['keterangan']=$_POST['ket'];
				$data['kelas']=$_POST['kelas'];
				$data['akses']=$_POST['akses'];
				$data['eula']=$_POST['eula'];

				$this->ModelKamar->insert_entry($data);
            	$this->load->view('success',$data);
            }
    }

	public function editkamar($id_kamar)
	{
		$where=array('id_kamar'=>$id_kamar);
		$data['kamar']=$this->ModelKamar->edit_kamar($where,'kamar')->result_array();
		$data['query']=$this->ModelKelas->get_all();
		$this->load->view('templates/sidebar');
		$this->load->view('templates/header',$data);
		$this->load->view('editKamar.php');
		$this->load->view('templates/footer');
	}

	public function updateData()
	{
		$data['namaKamar']=$_POST['namaKamar'];
		$data['hargaKamar']=$_POST['harga'];
		$data['keterangan']=$_POST['ket'];
		$data['kelas']=$_POST['kelas'];
		$data['akses']=$_POST['akses'];
		$data['eula']=$_POST['eula'];

		$id_kamar=$this->input->post('id_kamar');

		$where=array('id_kamar'=>$id_kamar);
		$this->ModelKamar->update_kamar($where,$data,'kamar');
		redirect('Admin/index');

	}

	public function deletekamar($id_kamar){
		$where = array('id_kamar' => $id_kamar);
		$this->ModelKamar->hapus_kamar($where,'kamar');
		redirect('Admin/index');
	}
}
