<?php
error_reporting(0);

$server		= 'localhost';
$user		= 'root';
$pass		= '';
$db			= 'db_penjualan_intan';

$con		= mysql_connect($server, $user, $pass) or die('gagal koneksi');
mysql_select_db($db, $con) or die('gagal database');

?>