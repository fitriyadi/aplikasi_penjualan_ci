<?php
session_start();
//koneksi
require_once('pengaturan/koneksi.php');
require_once('pengaturan/fungsi.php');
//jcart
require_once('pengaturan/jcart.php');


if(!isset($_SESSION['keranjang'])){
	//ridirect
	echo "<script>window.location='?hal=keranjang';</script>";
}else{	

	extract($_POST);
	$idtransaksi = kode_otomatis("transaksi", "idtransaksi", "TP".date('my'), "6", "2");
	$idcustomer = $_SESSION['member']['idcustomer'];
	$iddaerah = $_SESSION['daerah'];
	$ongkir = mysql_fetch_array(mysql_query("SELECT ongkir FROM daerah WHERE iddaerah='".$iddaerah."'"));
	$biaya=$ongkir['ongkir'];
	$alamat_penerima=$_POST['alamat'];
	$nama_penerima=$_POST['nama'];
	$telpon_penerima=$_POST['notelpon'];
	$berat=berat();
	$total = totalHarga() + ($biaya * ceil($berat));
	$tanggal=date('Y-m-d');
	$status='pesan';
	//echo  berat();
	$eks = "INSERT INTO transaksi (idtransaksi,idcustomer,iddaerah,ongkir,alamat_penerima,nama_penerima,telpon_penerima,berat,total,tanggal,status) VALUES('$idtransaksi','$idcustomer','$iddaerah','$biaya','$alamat_penerima','$nama_penerima','$telpon_penerima','$berat','$total','$tanggal','$status')";

	
	if(mysql_query($eks))
	{
		//isi detail pemesanan	
		$status = isiCart($idtransaksi);
		
		//HAPUS SEMUA SESSION YANG ADA
		unset ($_SESSION['keranjang']);
		echo "<script>window.location='index.php?hal=history';</script>";
	}else{
	
	}
	
}
?>