<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$idanggota = $_GET['idanggota'];


// menghapus data dari database
mysqli_query($db,"DELETE FROM tb_anggota WHERE idanggota='$idanggota'");

// mengalihkan halaman kembali ke index.php
header("location:data_anggota.php");

?>