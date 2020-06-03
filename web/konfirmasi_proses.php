<?php
include 'pengaturan/koneksi.php';
include 'pengaturan/fungsi.php';


if (isset($_GET['diterima'])){
	$kode=$_GET['diterima'];
	$sql2 = "UPDATE transaksi SET status='Diterima' WHERE idtransaksi='$kode';";

	if(mysql_query($sql2))
		{
			echo "<script>alert('Berhasil konfirmasi Barang Diterima');</script>";
			echo "<script>window.location='index.php?hal=history';</script>";
		}else{
			echo "<script>alert('Proses gagal');</script>";
			echo "<script>window.location='javascript:history.go(-1)';</script>";
		}
}

extract($_POST);
if(isset($kirim))
{
	//CEK SUDAH BAYAR APA BELUM
	$cek = mysql_query(sprintf("SELECT * FROM transaksi WHERE idtransaksi = '%s' AND status='bayar'",
		mysql_real_escape_string($idtransaksi)));
	$jml = mysql_num_rows($cek);
	
	if($jml>0)
	{
		echo "<script>alert('transaksi sudah terbayar sebelumnya');</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";

	}else{

		$idPembayaran = kode_otomatis("pembayaran", "idpembayaran", "PB".date('my'), "6", "2");
		//upload
		$lokasi_file    = $_FILES['bukti_transfer']['tmp_name'];
		$tipe_file      = $_FILES['bukti_transfer']['type'];
		$nama_file      = $idPembayaran.'.jpg'; 

		// Apabila ada gambar yang diupload
		if (!empty($lokasi_file)){		  
			if ($tipe_file != "image/jpeg" && $tipe_file != "image/pjpeg"){
				echo "<script>window.alert('Upload Gagal, Pastikan File Foto yang di Upload Bertipe *.JPG')</script>";
				//ARAHKAN
				echo "<script>window.location='javascript:history.go(-1)';</script>";
			}else {
				//buat folder
				if(is_dir("uploaded/bukti_transfer"))
				{
					$tempat_gambar = "uploaded/bukti_transfer";
				}else{
					mkdir("uploaded/bukti_transfer");
					$tempat_gambar = "uploaded/bukti_transfer";
				}
				UploadImage($nama_file, $tempat_gambar ,"bukti_transfer");
			}
		}else{
			$nama_file = "none.jpg";
		}
		
		$query = sprintf("INSERT INTO pembayaran (idPembayaran,idtransaksi, dibayar, bank_no, bank_nama, bank_an, bukti) 
			VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s')",
			mysql_real_escape_string($idPembayaran),
			mysql_real_escape_string($idtransaksi),
			mysql_real_escape_string($dibayar),
			mysql_real_escape_string($bank_no),
			mysql_real_escape_string($bank_nama),
			mysql_real_escape_string($bank_an),
			mysql_real_escape_string($nama_file));
		if(mysql_query($query))
		{
			echo "<script>alert('Berhasil konfirmasi pembayaran');</script>";
			echo "<script>window.location='index.php?hal=history';</script>";
		}else{
			echo "<script>alert('Konfirmasi pembayaran gagal, Silahkan ulangi lagi');</script>";
			echo "<script>window.location='javascript:history.go(-1)';</script>";
		}
	}//END CEK EMAIL
}
?>