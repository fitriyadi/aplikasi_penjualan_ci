<?php

class pengiriman extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model(array('m_transaksi'));
		$this->load->library(array('template'));
		$this->load->helper(array('form', 'url'));
	}

	function index(){
		$data['transaksi']=$this->m_transaksi->tampilpengiriman()->result();
		$data['message']='';
		$this->template->display('pengiriman/index',$data);
	}

	function edit($id){
		if (isset($_POST['ubah'])){
			$info=array('info_pengiriman'=>$this->input->post('info'),
				'status'=>'Pengiriman'
			);

			$this->m_transaksi->ubah($info,$this->input->post('idtransaksi'));
			$this->session->set_flashdata('flash','Diubah Info Pengiriman');
			redirect('pengiriman');

		}else{
			$data['transaksi']=$this->m_transaksi->tampilid($id)->row_array();
			$data['transaksi_detail']=$this->m_transaksi->tampildetail($id)->result();
			$this->template->display('pengiriman/edit',$data);
		}


		

	}

}
?>