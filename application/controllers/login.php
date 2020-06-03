<?php

class Login extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model(array('m_user'));

	}

  function index(){
    if (isset($_POST['login'])){
      $username=$this->input->post('username');
      $password=$this->input->post('password');

      $loginadmin=$this->m_user->cekloginadmin($username,$password);

      if($loginadmin->num_rows()>0){
        $this->session->set_userdata('username',$username);
        $this->session->set_userdata('role',"Admin");
        redirect('beranda/menuadmin');

      }else{
        echo "<script type='text/javascript'>alert('Username atau password salah');window.location.href = '../login/';</script>";
      }
      
    }else{
      $this->load->view('utama/index');
    }
  }


  function proseslogout(){
   $this->session->sess_destroy();
   $this->load->view('utama/index');
   echo "<script>window.location='../../web';</script>";
 }

}
?>