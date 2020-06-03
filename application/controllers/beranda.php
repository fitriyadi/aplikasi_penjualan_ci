<?php
class Beranda extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->library(array('template'));
	}
	
	function menuadmin(){

		$data['info']="Selamat datang Admin";
		$this->template->display('beranda/admin',$data);
	}

	function menupimpinan(){
		$data['info']="Selamat datang Pimpinan";
		$this->template->display('beranda/pimpinan',$data);
	}

}
?>