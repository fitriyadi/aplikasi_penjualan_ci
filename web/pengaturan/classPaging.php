<?php
// class paging untuk page administrator
class Paging{
// Fungsi untuk mencek page dan posisi data
	function cariPosisi($batas){
		if(empty($_GET['page'])){
			$posisi=0;
			$_GET['page']=1;
		}
		else{
			$posisi = ($_GET['page']-1) * $batas;
		}
		return $posisi;
	}

// Fungsi untuk menghitung total page
	function jumlahHalaman($jmldata, $batas){
		$jmlpage = ceil($jmldata/$batas);
		return $jmlpage;
	}

// Fungsi untuk link page 1,2,3 (untuk admin)
	function navHalaman($page_aktif, $jmlpage, $file){
		$link_page = "";

// Link ke page pertama (first) dan sebelumnya (prev)
		if($page_aktif > 1){
			$prev = $page_aktif-1;
			$link_page .= "<a class='page-link' <a href=$_SERVER[PHP_SELF]?hal=$file&page=1 class='paging'><<</a></li> 
			<a class='page-link' <a href=$_SERVER[PHP_SELF]?hal=$file&page=$prev class='paging'><</a></li>";
		}
		else{ 
	//$link_page .= "<< First | < Prev | ";
		}

// Link page 1,2,3, ...
		$angka = ($page_aktif > 3 ? " ... " : " "); 
		for ($i=$page_aktif-2; $i<$page_aktif; $i++){
			if ($i < 1)
				continue;
			$angka .= "<a class='page-link' <a href=$_SERVER[PHP_SELF]?hal=$file&page=$i class='paging'>$i</a></li>";
		}
		$angka .= "<a class='page-link' class='paging'>$i</a></li>";
		
		for($i=$page_aktif+1; $i<($page_aktif+3); $i++){
			if($i > $jmlpage)
				break;
			$angka .= "<a class='page-link' <a href=$_SERVER[PHP_SELF]?hal=$file&page=$i class='paging'>$i</a></li>";
		}
		$angka .= ($page_aktif+2<$jmlpage ? " ... <a class='page-link' <a href=$_SERVER[PHP_SELF]?hal=$file&page=$jmlpage class='paging'>$jmlpage</a></li>" : " ");

		if($jmlpage > 1){
			$link_page .= "$angka";
		}

// Link ke page berikutnya (Next) dan terakhir (Last) 
		if($page_aktif < $jmlpage){
			$next = $page_aktif+1;
			$link_page .= " <a class='page-link' <a href=$_SERVER[PHP_SELF]?hal=$file&page=$next class='paging'>></a></li>
			<a class='page-link' <a href=$_SERVER[PHP_SELF]?hal=$file&page=$jmlpage class='paging'>>></a></li> ";
		}
		else{
	//$link_page .= " Next > | Last >>";
		}
		return $link_page;
	}
}
?>