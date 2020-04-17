<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Faker -  Malasngoding.com</title>
</head>
<body>
	<h2><a href="#">Tutorial cara menggunakan Faker PHP dan MySQLI</a></h2>
	<br>
	<a href="tambah.php">input data dummy</a>
	<br>
	<br>
	<table border="1">
		<tr>
			<th>Nomor</th>
			<th>Nama</th>
			<th>Umur</th>
			<th>Alamat</th>
		</tr>		
		<?php 
		$data = mysqli_query($koneksi,"select * from pegawai");
		$no=1;
		while($d =mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $d['pegawai_nama']; ?></td>
				<td><?php echo $d['pegawai_umur']." Tahun"; ?></td>
				<td><?php echo $d['pegawai_alamat']; ?></td>
			</tr>
			<?php
		}
		?>
	</table>
</body>
</html>