<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data Admin</title>
</head>
<body>

	<h2>Tampil Data Admin</h2>
	<br/>
	<a href="index.php">Kembali</a>
	<br/>
	<br/>
	<h3>Tambah Data Mahasiswa</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="number" name="nim"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</body>
</html>