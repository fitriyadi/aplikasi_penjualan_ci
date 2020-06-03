<?php
class M_pembayaran extends CI_Model{
	
	function tampil(){
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('pembayaran', 'transaksi.idtransaksi=pembayaran.idtransaksi');
		return $this->db->get();
	}


	function tampilid($id){
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('pembayaran', 'transaksi.idtransaksi=pembayaran.idtransaksi');
		return $this->db->get();
	}

	function tampildetail($id){
		$this->db->select('*');
		$this->db->from('transaksi_detail');
		$this->db->join('barang', 'barang.idbarang=transaksi_detail.idbarang');
		$this->db->where("idtransaksi",$id);
		return $this->db->get();
	}

	function ubah($data,$id){
		$this->db->where("idtransaksi",$id);
		$this->db->update("transaksi",$data);
	}

	function hapus($kode){
		$this->db->where("idpembayaran",$kode);
		$this->db->delete("pembayaran");
	}

}
?>