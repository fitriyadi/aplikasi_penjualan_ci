<?php
class M_transaksi extends CI_Model{
	
	function tampil(){
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('customer', 'transaksi.idcustomer=customer.idcustomer');
		return $this->db->get();
	}

	function tampilpengiriman(){
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('customer', 'transaksi.idcustomer=customer.idcustomer');
		$this->db->or_where("status",'Valid');
		$this->db->Or_where("status",'Pengiriman');
		$this->db->Or_where("status",'Diterima');
		return $this->db->get();
	}


	function ubah($data,$id){
		$this->db->where("idtransaksi",$id);
		$this->db->update("transaksi",$data);
	}

	function tampilid($id){
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('customer', 'transaksi.idcustomer=customer.idcustomer');
		$this->db->join('daerah', 'transaksi.iddaerah=daerah.iddaerah');
		$this->db->where("idtransaksi",$id);
		return $this->db->get();
	}

	function tampildetail($id){
		$this->db->select('*');
		$this->db->from('transaksi_detail');
		$this->db->join('barang', 'barang.idbarang=transaksi_detail.idbarang');
		$this->db->where("idtransaksi",$id);
		return $this->db->get();
	}

	function tampillaporan($bulan,$tahun){
		$this->db->select('*');
		$this->db->from('transaksi_detail');
		$this->db->join('barang', 'barang.idbarang=transaksi_detail.idbarang');
		$this->db->join('transaksi', 'transaksi.idtransaksi=transaksi_detail.idtransaksi');
		$this->db->where("month(tanggal)",$bulan);
		$this->db->where("year(tanggal)",$tahun);
		return $this->db->get();
	}

	function hapus($kode){
		$this->db->where("idtransaksi",$kode);
		$this->db->delete("transaksi_detail");

		$this->db->where("idtransaksi",$kode);
		$this->db->delete("transaksi");
	}

}
?>