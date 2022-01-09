<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$idbuku = $_GET['idbuku'];


// menghapus data dari database
mysqli_query($db,"DELETE FROM tb_buku WHERE idbuku='$idbuku'");

// mengalihkan halaman kembali ke index.php
header("location:data_buku.php");

?>