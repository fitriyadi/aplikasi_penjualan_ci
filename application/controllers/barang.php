<?php

class barang extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model(array('m_barang','m_kategori'));
		$this->load->library(array('template'));
		$this->load->helper(array('form', 'url'));
	}

	function index(){
		
		$data['barang']=$this->m_barang->tampil()->result();
		$data['message']='';
		$this->template->display('barang/index',$data);
	}

	function edit($id){
		if (isset($_POST['ubah'])){

			//Upload Berkas
			$config['upload_path']          = './assets/upload/barang/';
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
					'namabarang'=>$this->input->post('namabarang'),
					'berat'=>$this->input->post('berat'),
					'harga'=>$this->input->post('harga'),
					'stok'=>$this->input->post('stok'),
					'gambar'=>$this->upload->data('file_name'),
					'detail'=>$this->input->post('detail'),
					'idkategori'=>$this->input->post('idkategori')
				);

				$this->m_barang->simpan($info);
				$this->session->set_flashdata('flash','Ditambahakan');
				redirect('barang');
			}


		}else{
			$data['barang']=$this->m_barang->tampilid($id)->row_array();
			$data['kategori']=$this->m_kategori->tampil()->result();
			$this->template->display('barang/edit',$data);
		}
	}

	function tambah(){
		if (isset($_POST['tambah'])){

		//Upload Berkas
			$config['upload_path']          = './assets/upload/barang/';
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
					'idbarang'=>$this->input->post('idbarang'),
					'namabarang'=>$this->input->post('namabarang'),
					'berat'=>$this->input->post('berat'),
					'harga'=>$this->input->post('harga'),
					'stok'=>$this->input->post('stok'),
					'gambar'=>$this->upload->data('file_name'),
					'detail'=>$this->input->post('detail'),
					'idkategori'=>$this->input->post('idkategori')
				);

				$this->m_barang->simpan($info);
				$this->session->set_flashdata('flash','Ditambahakan');
				redirect('barang');
			}



		}else{
			$data['kode']=$this->m_barang->kode();
			$data['message']="";
			$data['barang']=$this->m_barang->tampil()->result();
			$data['kategori']=$this->m_kategori->tampil()->result();
			$this->template->display('barang/tambah',$data);
		}
	}

	function hapus($id){
		$this->m_barang->hapus($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('barang');
	}

}
?>