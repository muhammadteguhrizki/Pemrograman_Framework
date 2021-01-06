<?php
	class Pinjam_m extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}

		function get_records(){
			$this->db->select('*');
			$this->db->from('tb_pinjam');
			$this->db->join('tb_anggota','tb_anggota.nim=tb_pinjam.nim','left');
			$this->db->join('tb_buku','tb_buku.idbuku=tb_pinjam.idbuku','left');
			$query=$this->db->get();
			return $query;
		}

		function insert($data){
			$query=$this->db->insert('tb_pinjam',$data);
			return $query;
		}

		function edit_data($id){
			$this->db->select('*');
			$this->db->from('tb_pinjam');
			$this->db->where("idpinjam = '$id'");
			$query=$this->db->get();
			return $query;
		}

		function update($data,$id){
			$this->db->where("idpinjam = '$id'");
			$this->db->update('tb_pinjam',$data);
		}

		function hapus($id){
			$this->db->where("idpinjam = '$id'");
			$this->db->delete('tb_pinjam');
		}
	}
?>