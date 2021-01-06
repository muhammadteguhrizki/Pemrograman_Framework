<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class buku extends CI_controller {
	
	function __construct()
		{
			parent::__construct();
			$this->load->model('buku_m');
			$this->load->helper('url');
		}
	function index()
		{
			$this->data['query']=$this->buku_m->get_records();
			$this->load->view('buku_v',$this->data);
		}
	function add(){
		$this->load->view('buku_v_form');
	}
	function simpan(){
		$judul = $this->input->post('judul');
		$pengarang = $this->input->post('pengarang');
		$kategori = $this->input->post('kategori');
	
		$data = array(
			'judul' => $judul,
			'pengarang' => $pengarang,
			'kategori' => $kategori,
			);
		$this->buku_m->insert($data);
		redirect('buku/index');
	}

	function edit($id){
		$data['nilai'] = $this->buku_m->edit_data($id,'nilai')->result();
		$this->load->view('buku_v_form_edit',$data);
	}
	function update(){
		$judul = $this->input->post('judul');
		$pengarang = $this->input->post('pengarang');
		$kategori = $this->input->post('kategori');
		$idbuku = $this->input->post('idbuku');
	

		$data = array(
			'judul' => $judul,
			'pengarang' => $pengarang,
			'kategori' => $kategori,
			);
		$this->buku_m->update($data,$idbuku);
		redirect('buku/index');
	}
	function hapus($id){
		$this->buku_m->hapus($id);
		redirect('buku/index');
	}
} 