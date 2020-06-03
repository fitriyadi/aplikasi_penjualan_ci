<?php

class M_user extends CI_Model{
	
	function cekloginadmin($user,$pass){
		$this->db->where("username",$user);
		$this->db->where("password",$pass);
		return $this->db->get("admin");
	}

}
?>