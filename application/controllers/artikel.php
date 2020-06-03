<?php

class Artikel extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model(array('m_artikel'));
		$this->load->library(array('template'));
		$this->load->helper(array('form', 'url'));
	}

	function index(){
		
		$data['artikel']=$this->m_artikel->tampil()->result();
		$data['message']='';
		$this->template->display('artikel/index',$data);
	}

	function edit($id){
		if (isset($_POST['ubah'])){
			
			//Upload Berkas
			$config['upload_path']          = './assets/upload/artikel/';
			$config['allowed_types']        = '*';
			$config['max_size']             = 1000;
			$config['max_width']            = 1024;
			$config['max_height']           = 768;
			$config['max_height']           = 768;
			$config['overwrite']           = true;
			$this->load->library('upload', $config);

			
			if ( ! $this->upload->do_upload('gambar')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);

			}else{
				$data = array('upload_data' => $this->upload->data());

				$info=array(
					'judul'=>$this->input->post('judul'),
					'isi'=>$this->input->post('isi'),
					'gambar'=>$this->upload->data('file_name')
				);

				$this->m_artikel->ubah($info,$this->input->post('idartikel'));
				$this->session->set_flashdata('flash','Diubah');
				redirect('artikel');
			}


		}else{
			$data['artikel']=$this->m_artikel->tampilid($id)->row_array();
			$this->template->display('artikel/edit',$data);
		}
	}

	function tambah(){
		if (isset($_POST['tambah'])){

			$admin="1";
			$tanggal=date('Y-m-d');

			//Upload Berkas
			$config['upload_path']          = './assets/upload/artikel/';
			$config['allowed_types']        = '*';
			$config['max_size']             = 1000;
			$config['max_width']            = 1024;
			$config['max_height']           = 768;

			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('gambar')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
				print_r($this->upload->data());

			}else{
				$data = array('upload_data' => $this->upload->data());

				$info=array(
					'judul'=>$this->input->post('judul'),
					'isi'=>$this->input->post('isi'),
					'gambar'=>$this->upload->data('file_name'),
					'tanggal'=>$tanggal,
					'idadmin'=>$admin
				);

				$this->m_artikel->simpan($info);
				$this->session->set_flashdata('flash','Ditambahakan');
				redirect('artikel');
			}
			
		}else{
			$data['message']="";
			$data['artikel']=$this->m_artikel->tampil()->result();
			$this->template->display('artikel/tambah',$data);
		}
	}

	function hapus($id){
		$this->m_artikel->hapus($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('artikel');
	}

}
?>