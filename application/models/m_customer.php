<?php
class M_customer extends CI_Model{
	
	function tampil(){
		return $this->db->get("customer");
	}


	function tampilid($id){
		$this->db->where("idcustomer",$id);
		return $this->db->get("customer");
	}

	function simpan($data){
		$this->db->insert("customer",$data);
	}

	function ubah($data,$id){
		$this->db->where("idcustomer",$id);
		$this->db->update("customer",$data);
	}

	function hapus($kode){
		$this->db->where("idcustomer",$kode);
		$this->db->delete("customer");
	}

}
?>