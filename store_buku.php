<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$idbuku = $_POST['idbuku'];
$judulbuku = $_POST['judulbuku'];
$kategori = $_POST['kategori'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];

// menginput data ke database
mysqli_query($db,"INSERT INTO tb_buku values('$idbuku','$judulbuku','$kategori','$pengarang','$penerbit')");

// mengalihkan halaman kembali ke index.php
header("location:data_buku.php");

?>