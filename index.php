<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1>Login Operator Dosen</h1>

	<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>

	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>

		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">

			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">

			<input type="submit" class="tombol_login" value="LOGIN">
			<br/>
			<br/>
		</form>
		<a class="tombol_login" href="mahasiswa/index.php">Saya Mahasiswa</a>

	</div>


</body>
</html>
