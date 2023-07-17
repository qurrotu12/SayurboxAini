<!DOCTYPE html>
<html>
<head>
	<title>SayurBox</title>
	<link rel="stylesheet" type="text/css" href="css/tampilan.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<h1 class="judul">Website Belanja Sayur Online</h1>
			<ul>
				<li><a href ="home.html">HOME</a></li>
				<li><a href ="kategori.html">KATEGORI</a></li>
				<li><a href ="#">KERANJANG BELANJA</a></li>
				<li><a href ="pesanan.php">PESANAN</a></li>
			</ul>
		</div>

		<!-- Btas bagian header -->
		<div class="banner"></div>
	    <!-- Btas bagian banner -->

	    <div class="content">
		    <center><h2>Selamat Berbelanja di SayurBox</h2></center>
		 
		    <form action="output.php" method="POST">

			<hr color = "Black">

			<table style="margin: 5px auto;" cellpadding="3">
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" size="20" maxlength="30"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email" size="20" maxlength="30" placeholder="cth.info@email.com"></td>
				</tr>
			</tr>
			<tr>
				<td>Kategori</td>
				<td> :</td>
				<td><input type="radio" value="Sayur" name="kategori">Sayur
					<input type="radio" value="Buah" name="kategori">Buah<br></td>
			</tr>
			<tr>
				<td>No.Telp</td>
				<td>:</td>
				<td><input type="text" name="telp" size="20" maxlength="30"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat" cols="30" rows="10"></textarea></td>
			</tr>
			<tr>
				<td>
				<input type="Submit" value="Simpan">
				<input type="Reset" value="Batal"></td><br>
				</tr>
				</form>
			</table>
			
			<div class="footer">
				<p class="copy"> Copyright 2022 by qurrotu aini</p>
			</div>
		</div>
	</div>
						
</body>
</html>