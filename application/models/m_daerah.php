<?php
class M_daerah extends CI_Model{
	
	function tampil(){
		return $this->db->get("daerah");
	}


	function tampilid($id){
		$this->db->where("iddaerah",$id);
		return $this->db->get("daerah");
	}

	function simpan($data){
		$this->db->insert("daerah",$data);
	}

	function ubah($data,$id){
		$this->db->where("iddaerah",$id);
		$this->db->update("daerah",$data);
	}

	function hapus($kode){
		$this->db->where("iddaerah",$kode);
		$this->db->delete("daerah");
	}

}
?>