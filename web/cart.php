<?php
include 'pengaturan/koneksi.php';
//include 'pengaturan/fungsi.php';

session_start();
if(isset($_REQUEST['aksi']) && isset($_REQUEST['id']))
{
	if($_REQUEST['aksi']=='tambah')
	{
		if(isset($_SESSION['keranjang'][$_REQUEST['id']]))
		{
			$_SESSION['keranjang'][$_REQUEST['id']] += 1;
		}else{
			$_SESSION['keranjang'][$_REQUEST['id']] = 1;
		}

	}else if($_REQUEST['aksi']=='ubah'){
		
	
		foreach($_REQUEST['id'] as $id=>$id_produk)
		{
			$sql="Select * from barang where idbarang='$id_produk'";
			$hasil=mysql_fetch_array(mysql_query($sql));

			$jumsql=$hasil['stok'];
			$jum=$_REQUEST['jml'][$id_produk];

			if ($jumsql < $jum){
				echo "<script>alert('Stok Barang tidak mencukupi');</script>";
			}else{
				$_SESSION['keranjang'][$id_produk] = $_REQUEST['jml'][$id_produk];
			}
			

			if($_REQUEST['jml'][$id_produk]==0) {
				unset($_SESSION['keranjang'][$id_produk]);
			}
		}

	}else if($_REQUEST['aksi']=='hapus'){
		unset($_SESSION['keranjang'][$_REQUEST['id']]);
	
	}else if($_REQUEST['aksi']=='kosongkan'){
		unset($_SESSION['keranjang']);
	
	}else if($_REQUEST['aksi']=='selesai'){
		//unset($_SESSION['keranjang']);
		$_SESSION['daerah']=$_POST['daerah'];
		echo "<script>window.location='index.php?hal=pengiriman';</script>";
	}
}
//ARAHKAN
echo "<script>window.location='index.php?hal=keranjang';</script>";
?>