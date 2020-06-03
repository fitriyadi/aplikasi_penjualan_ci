<?php
class M_artikel extends CI_Model{
	
	function tampil(){
		return $this->db->get("artikel");
	}


	function tampilid($id){
		$this->db->where("idartikel",$id);
		return $this->db->get("artikel");
	}

	function simpan($data){
		$this->db->insert("artikel",$data);
	}

	function ubah($data,$id){
		$this->db->where("idartikel",$id);
		$this->db->update("artikel",$data);
	}

	function hapus($kode){
		$this->db->where("idartikel",$kode);
		$this->db->delete("artikel");
	}


}
?>