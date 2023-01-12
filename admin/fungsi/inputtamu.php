<?php
include"koneksi.php";
$email = $_POST['email'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];

$sqlsimpan = $pdo->query("INSERT INTO tamu VALUES('', '$email', '$nama', '$alamat', '$telepon')");
echo"<script>alert('Data Tersimpan');document,location.href='../pemesanan';</script>";
?>