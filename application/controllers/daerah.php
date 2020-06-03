<?php

class Daerah extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model(array('m_daerah'));
		$this->load->library(array('template'));
	}

	function index(){
		
		$data['daerah']=$this->m_daerah->tampil()->result();
		$data['message']='';
		$this->template->display('daerah/index',$data);
	}

	function edit($id){
		if (isset($_POST['ubah'])){
			$info=array('provinsi'=>$this->input->post('provinsi'),
				'kota'=>$this->input->post('kota'),
				'ongkir'=>$this->input->post('ongkir')
				);

			$this->m_daerah->ubah($info,$this->input->post('iddaerah'));
			$this->session->set_flashdata('flash','Diubah');
			redirect('daerah');

		}else{
			$data['daerah']=$this->m_daerah->tampilid($id)->row_array();
			$this->template->display('daerah/edit',$data);
		}
	}

	function tambah(){
		if (isset($_POST['tambah'])){

			$info=array(
				'provinsi'=>$this->input->post('provinsi'),
				'kota'=>$this->input->post('kota'),
				'ongkir'=>$this->input->post('ongkir')
				);

			$this->m_daerah->simpan($info);
			$this->session->set_flashdata('flash','Ditambahakan');
			redirect('daerah');
			
		}else{
			$data['message']="";
			$data['daerah']=$this->m_daerah->tampil()->result();
			$this->template->display('daerah/tambah',$data);
		}
	}

	function hapus($id){
		$this->m_daerah->hapus($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('daerah');
	}

}
?>