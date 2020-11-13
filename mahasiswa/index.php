<!DOCTYPE html>
<html>
<head>
	<title>Tampil untuk Mahasiswa</title>
</head>
<body>


	<h2>Tampil untuk Mahasiswa</h2>
	<br/>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>View</th>
		</tr>
		<?php
		include '../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td>
					<a href="view.php?id=<?php echo $d['id']; ?>">View</a>
				</td>
			</tr>
			<?php
		}
		?>
	</table>
</body>
</html>
