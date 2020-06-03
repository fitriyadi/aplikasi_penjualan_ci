<?php
class M_barang extends CI_Model{
	
	function kode(){
		  $this->db->select('right(idbarang,4) as kode', FALSE);
		  $this->db->order_by('idbarang','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('barang');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->kode) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  $batas = str_pad($kode, 4, "0", STR_PAD_LEFT);    
			  $kodetampil = "B".$batas;  //format kode
			  return $kodetampil;  
	}

	function tampil(){
		return $this->db->get("barang");
	}


	function tampilid($id){
		$this->db->where("idbarang",$id);
		return $this->db->get("barang");
	}

	function simpan($data){
		$this->db->insert("barang",$data);
	}

	function ubah($data,$id){
		$this->db->where("idbarang",$id);
		$this->db->update("barang",$data);
	}

	function hapus($kode){
		$this->db->where("idbarang",$kode);
		$this->db->delete("barang");
	}

}
?>