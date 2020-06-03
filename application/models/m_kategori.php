<?php
class M_kategori extends CI_Model{
	
	function tampil(){
		return $this->db->get("kategori");
	}

	function kode(){
		  $this->db->select('right(idkategori,2) as kode', FALSE);
		  $this->db->order_by('idkategori','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('kategori');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->kode) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  $batas = str_pad($kode, 2, "0", STR_PAD_LEFT);    
			  $kodetampil = "K".$batas;  //format kode
			  return $kodetampil;  
	}

	function tampilid($id){
		$this->db->where("idkategori",$id);
		return $this->db->get("kategori");
	}

	function simpan($data){
		$this->db->insert("kategori",$data);
	}

	function ubah($data,$id){
		$this->db->where("idkategori",$id);
		$this->db->update("kategori",$data);
	}

	function hapus($kode){
		$this->db->where("idkategori",$kode);
		$this->db->delete("kategori");
	}

}
?>