<?php
require_once 'pengaturan/koneksi.php';
session_start();

if (isset($_POST['daftar'])){
	//CEK EMAIL SUDAH ADA
	$cek = mysql_query(sprintf("SELECT * FROM customer WHERE email = '%s'",
		mysql_real_escape_string($_POST['email'])));
	$jml = mysql_num_rows($cek);
	
	if($jml>0)
	{
		echo "<script>alert('Email sudah ada sebelumnya');</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}else{

		$query = sprintf("INSERT INTO customer (nama, nohp, email, password, alamat) 
			VALUES ('%s', '%s', '%s', '%s', '%s')",
			mysql_real_escape_string($_POST['nama']),
			mysql_real_escape_string($_POST['nohp']),
			mysql_real_escape_string($_POST['email']),
			mysql_real_escape_string($_POST['password']),
			mysql_real_escape_string($_POST['alamat']));
		if(mysql_query($query))
		{
			echo "<script>alert('Berhasil Register, Silahkan Login untuk melakukan pemesanan');</script>";
			echo "<script>window.location='index.php';</script>";
		}else{
			echo "<script>alert('Pendaftaran Gagal, Silahkan ulangi lagi');</script>";
			echo "<script>window.location='javascript:history.go(-1)';</script>";
		}
	}//END CEK EMAIL

}elseif(isset($_POST['login'])){
	
	$pass=$_POST['pass'];
	$email=$_POST['user'];

	$eksekusi = mysql_query("SELECT COUNT(email) AS jml, idcustomer FROM customer WHERE email='$email' AND password='$pass'");
	$data = mysql_fetch_array($eksekusi);

	if($data['jml']>0){
		$_SESSION['member']['email']=$email;
		$_SESSION['member']['idcustomer']=$data['idcustomer'];
		echo "<script>alert('Berhasil login');</script>";
		echo "<script>window.location='index.php';</script>";
	}else{
		echo "<script>alert('Login Gagal, Silahkan ulangi lagi');</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}
	}

?>