<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form

$idbuku = $_POST['idbuku'];
$judulbuku = $_POST['judulbuku'];
$kategori = $_POST['kategori'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];

// echo "Id : ".$idbuku;
// echo "Judul : ".$judulbuku;
// echo "Kategori : ".$kategori;
// echo "Pengarang : ".$pengarang;
// echo "Penerbit : ".$penerbit;

// update data ke database
$query=mysqli_query($db,"UPDATE tb_buku SET judulbuku='$judulbuku', kategori='$kategori' ,pengarang='$pengarang',penerbit='$penerbit' WHERE idbuku='$idbuku' ");


// echo "Kode error: ".mysqli_errno($db);
// echo "<br>";
// echo "Pesan error: ".mysqli_error($db);


// mengalihkan halaman kembali ke index.php
header("location:data_buku.php");

?>