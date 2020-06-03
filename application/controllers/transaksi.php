<?php

class transaksi extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model(array('m_transaksi'));
		$this->load->library(array('template'));
		$this->load->helper(array('form', 'url'));
	}

	function index(){
		
		$data['transaksi']=$this->m_transaksi->tampil()->result();
		$data['message']='';
		$this->template->display('transaksi/index',$data);
	}

	function detail($id){
		$data['transaksi']=$this->m_transaksi->tampilid($id)->row_array();
		$data['transaksi_detail']=$this->m_transaksi->tampildetail($id)->result();
		$this->template->display('transaksi/detail',$data);
		
	}

	function hapus($id){
		$this->m_transaksi->hapus($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('transaksi');
	}

}
?>