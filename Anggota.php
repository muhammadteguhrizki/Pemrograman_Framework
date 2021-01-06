<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	function __construct()
		{
			parent::__construct();
			$this->load->model('Anggota_m');
			$this->load->helper('url');
		}
	function index()
		{
			$this->data['query'] = $this->Anggota_m->get_records();
			$this->load->View('anggota_v',$this->data);
		}
	function add(){
		$this->load->view('anggota_v_form');
	}
	function simpan(){
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$progdi = $this->input->post('progdi');

		$data = array(
			'nim' => $nim,
			'nama' => $nama,
			'progdi' => $progdi
			);
		$this->Anggota_m->insert($data);
		redirect('anggota/index');
	}

	function edit($id){
		$data['nilai'] = $this->Anggota_m->edit_data($id,'nilai')->result();
		$this->load->view('anggota_v_form_edit',$data);
	}

	function update(){
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$progdi = $this->input->post('progdi');

		$data = array(
			'nim' => $nim,
			'nama' => $nama,
			'progdi' => $progdi,
			);
		$this->Anggota_m->update($data,$nim);
		redirect('anggota/index');
	}

	function hapus($id){
		$this->Anggota_m->hapus($id);
		redirect('anggota/index');
	}
}