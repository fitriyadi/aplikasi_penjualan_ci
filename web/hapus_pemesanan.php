<?php
if(empty($_SESSION['member']) && empty($_GET['id'])){
	echo "<script>alert('Anda harus login');</script>";
	//ARAHKAN
	echo "<script>window.location='index.php';</script>";
}else{
	//JUMLAH PEMESANAN DULU
	$sql = mysql_query("SELECT id_produk, jumlah FROM `detail_pemesanan` WHERE `id_pemesanan`='".$_GET['id']."'");
	while($hasil = mysql_fetch_array($sql)){
		//JUMLAH PRODUK AWAL
		$sql_produk = mysql_fetch_array(mysql_query("SELECT stok FROM produk WHERE id_produk='".$hasil['id_produk']."'"));
		//TAMBAH KAN STOK
		$sisa_stok = $hasil['jumlah']+$sql_produk['stok'];
		//UPDATE JUMLAH STOCK
		mysql_query("UPDATE produk SET stok='".$sisa_stok."' WHERE id_produk='".$hasil['id_produk']."'");
	}
	//HAPUS ORDER
	mysql_query("DELETE FROM `pemesanan` WHERE `id_pemesanan`='".$_GET['id']."'");
}
echo "<script>window.location='index.php?hal=history';</script>";