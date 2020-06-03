<?php
session_start();
unset($_SESSION['member']);
echo "<script>alert('Berhasil Logout');</script>";
echo "<script>window.location='index.php';</script>";
?>