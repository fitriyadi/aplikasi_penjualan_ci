<?php
//KODE AUTO INCREMENT
function kode_otomatis($tabel, $id, $inisial, $index, $panjang)
{
  $query	= "SELECT max(".$id.") as max_id FROM `".$tabel."` WHERE ".$id." LIKE '".$inisial."%'";
  $query	= mysql_query($query);
  $data		= mysql_fetch_array($query);
  $id_max	= $data['max_id'];
  if($index=='' && $panjang=='')
  {
	$no_urut	= (int) $id_max;
  }else if($index!='' && $panjang==''){
	$no_urut    = (int) substr($id_max, $index);
  }else{
	$no_urut	= (int) substr($id_max, $index, $panjang);
  }
  $no_urut	= $no_urut + 1;
  if($index=='' && $panjang=='')
  {
	  $id_baru  = $no_urut;
  }else if($index!='' && $panjang==''){
	  $id_baru  = $inisial . $no_urut;
  }else{
	  $id_baru	= $inisial . sprintf("%0$panjang"."s", $no_urut);
  }
  return $id_baru;
}


function angka($angka)
{
	$hasil = number_format($angka, 0, ',', '.');
	return $hasil;
}

// Upload gambar
function UploadImage($fupload_name, $lokasi, $name){
  //direktori gambar
  $vdir_upload = "$lokasi/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["$name"]["tmp_name"], $vfile_upload);

  //identitas file asli
  $im_src = imagecreatefromjpeg($vfile_upload);
  $src_width = imageSX($im_src);
  $src_height = imageSY($im_src);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width = 150;
  $dst_height = ($dst_width/$src_width)*$src_height;

  //proses perubahan ukuran
  $im = imagecreatetruecolor($dst_width,$dst_height);
  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

  //Simpan gambar
  imagejpeg($im,$vdir_upload . "small_" . $fupload_name);

  //Simpan dalam versi medium 500 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width2 = 500;
  $dst_height2 = ($dst_width2/$src_width)*$src_height;

  //proses perubahan ukuran
  $im2 = imagecreatetruecolor($dst_width2,$dst_height2);
  imagecopyresampled($im2, $im_src, 0, 0, 0, 0, $dst_width2, $dst_height2, $src_width, $src_height);

  //Simpan gambar
  imagejpeg($im2,$vdir_upload . "medium_" . $fupload_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($im_src);
  imagedestroy($im);
  imagedestroy($im2);
}

?>