<?php

class pengguna extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model(array('m_pengguna'));
		$this->load->library(array('template'));
	}

	function index(){
		
		$data['pengguna']=$this->m_pengguna->tampil()->result();
		$data['message']='';
		$this->template->display('pengguna/index',$data);
	}

	function edit($id){
		if (isset($_POST['ubah'])){
			$info=array(
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password')
			);

			$this->m_pengguna->ubah($info,$this->input->post('idpengguna'));
			$this->session->set_flashdata('flash','Diubah');
			redirect('pengguna');

		}else{
			$data['pengguna']=$this->m_pengguna->tampilid($id)->row_array();
			$this->template->display('pengguna/edit',$data);
		}
	}

	function tambah(){
		if (isset($_POST['tambah'])){

			$info=array(
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password')
			);

			$this->m_pengguna->simpan($info);
			$this->session->set_flashdata('flash','Ditambahakan');
			redirect('pengguna');
			
		}else{
			$data['message']="";
			$data['pengguna']=$this->m_pengguna->tampil()->result();
			$this->template->display('pengguna/tambah',$data);
		}
	}

	function hapus($id){
		$this->m_pengguna->hapus($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('pengguna');
	}

}
?>