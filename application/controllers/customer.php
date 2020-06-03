<?php

class Customer extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model(array('m_customer'));
		$this->load->library(array('template'));
	}

	function index(){
		
		$data['customer']=$this->m_customer->tampil()->result();
		$data['message']='';
		$this->template->display('customer/index',$data);
	}

	function edit($id){
		if (isset($_POST['ubah'])){
			$info=array(
				'nama'=>$this->input->post('nama'),
				'nohp'=>$this->input->post('nohp'),
				'email'=>$this->input->post('email'),
				'alamat'=>$this->input->post('alamat'),
				'password'=>$this->input->post('password')
			);

			$this->m_customer->ubah($info,$this->input->post('idcustomer'));
			$this->session->set_flashdata('flash','Diubah');
			redirect('customer');

		}else{
			$data['customer']=$this->m_customer->tampilid($id)->row_array();
			$this->template->display('customer/edit',$data);
		}
	}

	function tambah(){
		if (isset($_POST['tambah'])){

			$info=array(
				'nama'=>$this->input->post('nama'),
				'nohp'=>$this->input->post('nohp'),
				'email'=>$this->input->post('email'),
				'alamat'=>$this->input->post('alamat'),
				'password'=>$this->input->post('password')
			);

			$this->m_customer->simpan($info);
			$this->session->set_flashdata('flash','Ditambahakan');
			redirect('customer');
			
		}else{
			$data['message']="";
			$data['customer']=$this->m_customer->tampil()->result();
			$this->template->display('customer/tambah',$data);
		}
	}

	function hapus($id){
		$this->m_customer->hapus($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('customer');
	}

}
?>