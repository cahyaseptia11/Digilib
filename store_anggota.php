<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$idanggota = $_POST['idanggota'];
$nama = $_POST['nama'];
$jeniskelamin = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];

// menginput data ke database
mysqli_query($db,"INSERT INTO tb_anggota values('$idanggota','$nama','$jeniskelamin','$alamat','$status')");

// mengalihkan halaman kembali ke index.php
header("location:data_anggota.php");

?>