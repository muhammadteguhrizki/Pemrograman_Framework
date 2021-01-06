<?php
	class Anggota_m extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}

		function get_records(){
			$this->db->select("*");
			$this->db->from("tb_anggota");
			$query=$this->db->get();
			return $query;
		}

		function insert($data){
			$query=$this->db->insert('tb_anggota',$data);
			return $query;
		}

		function edit_data($id){
			$this->db->select('*');
			$this->db->from('tb_anggota');
			$this->db->where("nim = '$id'");
			$query=$this->db->get();
			return $query;
		}

		function update($data,$nim){
			$this->db->where("nim = '$nim'");
			$this->db->update('tb_anggota',$data);
		}

		function hapus($id){
			$this->db->where("nim = '$id'");
			$this->db->delete('tb_anggota');
		}
	}

?>