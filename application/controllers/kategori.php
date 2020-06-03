<?php

class Kategori extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model(array('m_kategori'));
		$this->load->library(array('template'));
	}

	function index(){
		
		$data['kategori']=$this->m_kategori->tampil()->result();
		$data['message']='';
		$this->template->display('kategori/index',$data);
	}

	function edit($id){
		if (isset($_POST['ubah'])){
			$info=array('namakategori'=>$this->input->post('kategori'),
				'idkategori'=>$this->input->post('idkategori')
				);

			$this->m_kategori->ubah($info,$this->input->post('idkategori'));
			$this->session->set_flashdata('flash','Diubah');
			redirect('kategori');

		}else{
			$data['kategori']=$this->m_kategori->tampilid($id)->row_array();
			$this->template->display('kategori/edit',$data);
		}
	}

	function tambah(){
		if (isset($_POST['tambah'])){

			$info=array(
				'namakategori'=>$this->input->post('kategori'),
				'idkategori'=>$this->input->post('kode')
				);

			$this->m_kategori->simpan($info);
			$this->session->set_flashdata('flash','Ditambahakan');
			redirect('kategori');
			
		}else{
			$data['kode']=$this->m_kategori->kode();
			$data['message']="";
			$data['kategori']=$this->m_kategori->tampil()->result();
			$this->template->display('kategori/tambah',$data);
		}
	}

	function hapus($id){
		$this->m_kategori->hapus($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('kategori');
	}

}
?>