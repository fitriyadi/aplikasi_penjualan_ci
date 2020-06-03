<?php
function troli(){
	$troli = "0 item(s) - <span class='price'>Rp 0.00</span>";
	if(!empty($_SESSION['keranjang']))
	{
		$harga	= 0;
		$item	= 0;
		foreach($_SESSION['keranjang'] as $idbarang=>$jml)
		{
			$barang	= mysql_fetch_array(mysql_query("SELECT harga FROM barang WHERE idbarang='".$idbarang."'"));
			$harga	+= $barang['harga']*$jml;
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
		foreach($_SESSION['keranjang'] as $idbarang=>$jml)
		{
			$barang	= mysql_fetch_array(mysql_query("SELECT harga FROM barang WHERE idbarang='".$idbarang."'"));
			$total	+= $barang['harga']*$jml;
		}
	}
	return $total;
}

function berat(){
	$berat = 0;
	if(!empty($_SESSION['keranjang']))
	{
		foreach($_SESSION['keranjang'] as $idbarang=>$jml)
		{
			$barang	= mysql_fetch_array(mysql_query("SELECT berat FROM barang WHERE idbarang='".$idbarang."'"));
			$berat	+= $barang['berat']*$jml;
		}
	}
	return $berat;
}


function isiCart($no_pesan)
{
	if(!empty($_SESSION['keranjang']))
	{
		$harga = 0;
		foreach($_SESSION['keranjang'] as $idbarang=>$jml)
		{
			$barang	= mysql_fetch_array(mysql_query("SELECT harga FROM barang WHERE idbarang='".$idbarang."'"));
			$harga	= $barang['harga'];
			$sql5 = "INSERT INTO transaksi_detail values('$no_pesan','$idbarang','$jml','$harga');";
			//echo $sql5;
			mysql_query($sql5);
			
			//UPDATE STOK
			$eksekusi = mysql_query("SELECT stok FROM barang WHERE idbarang='$idbarang';");
			$stock = mysql_fetch_array($eksekusi);
			
			if($stock['stok']>0){
				$sql2 = "UPDATE barang SET stok=stok-$jml WHERE idbarang='$idbarang';";
				mysql_query($sql2);
			}
		}
	}
}
?>