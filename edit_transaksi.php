<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA DARI DATABASE DIGITAL LIBRARY</title>
</head>
<body>

	<center>

		<h2>DATA LAPORAN PERPUSTAKAAN</h2>
		<h4>--ADMIN--</h4>

	</center>

	<?php 
	include 'koneksi.php';
	?>

	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>ID Transaksi</th>
			<th>ID Anggota</th>
			<th width="5%">Nama</th>
			<th>ID Buku</th>
			<th>Judul Buku</th>
			<th>Tanggal Peminjaman</th>
			<th>Tanggal Pengembalian</th>
		</tr>
		<?php 
		$no = 1;
		$data = mysqli_query($db,"SELECT  tb_transaksi.idtransaksi,tb_anggota.idanggota,tb_anggota.nama,tb_buku.idbuku,tb_buku.judulbuku,tb_transaksi.tglpeminjaman,tb_transaksi.tglpengembalian FROM tb_transaksi JOIN tb_anggota ON tb_transaksi.idanggota = tb_anggota.idanggota JOIN tb_buku ON tb_transaksi.idbuku = tb_buku.idbuku;");
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['idtransaksi']; ?></td>
			<td><?php echo $d['idanggota']; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['idbuku']; ?></td>
			<td><?php echo $d['judulbuku']; ?></td>
			<td><?php echo $d['tglpeminjaman']; ?></td>
			<td><?php echo $d['tglpengembalian']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>

	<script>
		window.print();
	</script>

</body>
</html>