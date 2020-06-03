<?php

class Pembayaran extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model(array('m_pembayaran'));
		$this->load->library(array('template'));
		$this->load->helper(array('form', 'url'));
	}

	function index(){
		$data['pembayaran']=$this->m_pembayaran->tampil()->result();
		$data['message']='';
		$this->template->display('pembayaran/index',$data);
	}

	function detail($id){
		$data['pembayaran']=$this->m_pembayaran->tampilid($id)->row_array();
		$this->template->display('pembayaran/detail',$data);
		
	}

	function hapus($id){
		$this->m_pembayaran->hapus($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('pembayaran');
	}

	function valid($id){
		$info=array('status'=>"Valid");
		$this->m_pembayaran->ubah($info,$id);
		$this->session->set_flashdata('flash','Diubah Ke Valid');
		redirect('pembayaran');
	}

	function invalid($id){
	$info=array('status'=>"Tidak Valid");
		$this->m_pembayaran->ubah($info,$id);
		$this->session->set_flashdata('flash','Diubah Ke Valid');
		redirect('pembayaran');
	}



}
?>