<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$idtransaksi = $_POST['idtransaksi'];
$idanggota = $_POST['idanggota'];
$idbuku = $_POST['idbuku'];
$tglpeminjaman = $_POST['tglpeminjaman'];
$tglpengembalian=" ";

// menginput data ke database
mysqli_query($db,"INSERT INTO tb_transaksi values('','','','', '$tglpengembalian')");

// mengalihkan halaman kembali ke index.php
header("location:data_transaksi.php");

?>