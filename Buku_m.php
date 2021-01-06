<?php
	class buku_m extends CI_Model
	{
		function __construct() 
		{
			parent::__construct();
		}

		function get_records(){
			$this->db->select('*');
			$this->db->from('tb_buku');
			$query=$this->db->get();
			return $query;
		}
		function insert($data){
			$query=$this->db->insert('tb_buku',$data);
			return $query;
		}
		function edit_data($id){
			$this->db->select('*');
			$this->db->from('tb_buku');
			$this->db->where("idbuku = '$id'");
			$query=$this->db->get();
			return $query;
		}
		function update($data,$idbuku){
			$this->db->where("idbuku = '$idbuku'");
			$this->db->update('tb_buku',$data);
		}
		function hapus($id){
			$this->db->where("idbuku = '$id'");
			$this->db->delete('tb_buku');
		}
	}
?>