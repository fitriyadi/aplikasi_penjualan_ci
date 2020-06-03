<?php
function troli(){
	$troli = "0 item(s) - <span class='price'>Rp 0.00</span>";
	if(!empty($_SESSION['keranjang']))
	{
		$harga	= 0;
		$item	= 0;
		foreach($_SESSION['keranjang'] as $id_produk=>$jml)
		{
			$produk	= mysql_fetch_array(mysql_query("SELECT harga FROM produk WHERE id_produk='".$id_produk."'"));
			$harga	+= $produk['harga']*$jml;
			$item	+= $jml;
		}
		$troli = $item." item(s) - <span class='price'>Rp ".angka($harga)."</span>";
	}
	return $troli;
}
function totalHarga(){
	$total = 0;
	if(!empty($_SESSION['keranjang']))
	{
		foreach($_SESSION['keranjang'] as $id_produk=>$jml)
		{
			$produk	= mysql_fetch_array(mysql_query("SELECT harga FROM produk WHERE id_produk='".$id_produk."'"));
			$total	+= $produk['harga']*$jml;
		}
	}
	return $total;
}
function berat(){
	$berat = 0;
	if(!empty($_SESSION['keranjang']))
	{
		foreach($_SESSION['keranjang'] as $id_produk=>$jml)
		{
			$produk	= mysql_fetch_array(mysql_query("SELECT berat FROM produk WHERE id_produk='".$id_produk."'"));
			$berat	+= $produk['berat']*$jml;
		}
	}
	return $berat;
}

function isiCart($no_pesan)
{
	if(!empty($_SESSION['keranjang']))
	{
		$harga = 0;
		foreach($_SESSION['keranjang'] as $id_produk=>$jml)
		{
			$produk	= mysql_fetch_array(mysql_query("SELECT harga FROM produk WHERE id_produk='".$id_produk."'"));
			$harga	= $produk['harga'];
			$sql5 = "INSERT INTO detail_pemesanan values('$id_produk', '$no_pesan','$harga','$jml');";
			//echo $sql5;
			mysql_query($sql5);
			
			//UPDATE STOK
			$eksekusi = mysql_query("SELECT stok FROM produk WHERE id_produk='$id_produk';");
			$stock = mysql_fetch_array($eksekusi);
			if($stock['stok']>0){
				$sql2 = "UPDATE produk SET stok=stok-$jml WHERE id_produk='$id_produk';";
				mysql_query($sql2);
			}
		}
	}
}
?>