<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Pinjam_m');
		$this->load->helper('url');
	}

	function index(){
		$this->data['query'] = $this->Pinjam_m->get_records();
		$this->load->view('Pinjam_v',$this->data);
	}
	function add(){
		$this->load->view('Pinjam_v_form');
	}

	function simpan(){
		$nim = $this->input->post('nim');
		$buku = $this->input->post('buku');
		$tgl_pinjam = $this->input->post('tgl_pinjam');
		$tgl_kembali = $this->input->post('tgl_kembali');

		$data = array(
			'nim' => $nim,
			'idbuku' => $buku,
			'tgl_pinjam' => $tgl_pinjam,
			'tgl_kembali' => $tgl_kembali,
			);
		$this->Pinjam_m->insert($data);
		redirect('Pinjam/index');
	}

	function edit($id){
		$data['nilai'] = $this->Pinjam_m->edit_data($id,'nilai')->result();
		$this->load->view('Pinjam_v_form_edit',$data);
	}

	function update(){
		$id = $this->input->post('id');
		$nim = $this->input->post('nim');
		$buku = $this->input->post('buku');
		$tgl_pinjam = $this->input->post('tgl_pinjam');
		$tgl_kembali = $this->input->post('tgl_kembali');

		$data = array(
			'nim' => $nim,
			'idbuku' => $buku,
			'tgl_pinjam' => $tgl_pinjam,
			'tgl_kembali' => $tgl_kembali,
			);
		$this->Pinjam_m->update($data,$id);
		redirect('Pinjam/index');
		
	}

	function hapus($id){
		$this->Pinjam_m->hapus($id);
		redirect('Pinjam/index');
	}
}