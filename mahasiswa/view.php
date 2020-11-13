<!DOCTYPE html>
<html>
<head>
	<title>Detail Data Mahasiwa</title>
</head>
<body>


	<h2>Detail Data Mahasiswa</h2>
	<br/>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>NIM</th>
			<th>Alamat</th>
		</tr>
		<?php
		include '../koneksi.php';
    $id = $_GET['id'];
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mahasiswa where id='$id'");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['nim']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
			</tr>
			<?php
		}
		?>
	</table>
</body>
</html>
