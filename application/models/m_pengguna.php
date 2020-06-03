<?php
class M_pengguna extends CI_Model{
	
	function tampil(){
		return $this->db->get("admin");
	}

	function tampilid($id){
		$this->db->where("idadmin",$id);
		return $this->db->get("admin");
	}

	function simpan($data){
		$this->db->insert("admin",$data);
	}

	function ubah($data,$id){
		$this->db->where("idadmin",$id);
		$this->db->update("admin",$data);
	}

	function hapus($kode){
		$this->db->where("idadmin",$kode);
		$this->db->delete("admin");
	}


}
?>