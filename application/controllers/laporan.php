<?php

class laporan extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model(array('m_transaksi'));
		$this->load->library(array('template'));
		$this->load->helper(array('form', 'url'));
	}

	function index(){
		if(isset($_POST['lihat'])){
			$bulan=$_POST['bulan'];
			$tahun=$_POST['tahun'];

			$data['transaksi']=$this->m_transaksi->tampillaporan($bulan,$tahun)->result();
			$data['tahun']=$_POST['tahun'];
			$data['bulan']=$_POST['bulan'];
			$this->template->display('laporan/hasil',$data);

		}else{
			$data='';
			$this->template->display('laporan/index',$data);
		}
	}

}
?>