<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form

$idanggota= $_POST['idanggota'];
$nama = $_POST['nama'];
$jeniskelamin = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];


// update data ke database
$query=mysqli_query($db,"UPDATE tb_anggota SET nama='$nama', jeniskelamin='$jeniskelamin' ,alamat='$alamat',status='$status' WHERE idanggota='$idanggota' ");


// mengalihkan halaman kembali ke index.php
header("location:data_anggota.php");

?>