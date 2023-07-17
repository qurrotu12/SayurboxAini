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
			<center>
			
		<h2>******* Pesanan Saya ******* </h2>
			
	<?php  

	$VarNama=$_POST['nama'];
	$VarEmail=$_POST['email'];
	$VarKategori=$_POST['kategori'];
	$VarTelp=$_POST['telp'];
	$VarAlamat=$_POST['alamat'];

	?>

	<table>
		<tr>
			<td width="100">Tanggal Cetak </td>
			<td> : <?php echo date ("D - d/M/Y"); ?></td>
		</tr>
		<tr>
			<td>Nama Lengkap </td>
			<td> : <?php echo $VarNama ; ?></td>
		</tr>
		<tr>
			<td>Email </td>
			<td> : <?php echo $VarEmail ; ?></td>
		</tr>
		<tr>
			<td>Kategori </td>
			<td> : <?php echo $VarKategori ; ?></td>
		</tr>
		<tr>
			<td>No.Telp </td>
			<td> : <?php echo $VarTelp ; ?></td>
		</tr>
		<tr>
			<td>Alamat </td>
			<td> : <?php echo $VarAlamat ; ?></td>
		</tr>
		
	</table>
	<br>
	 <a href="pesanan.php"><<< INPUT LAGI YUK</a>
	 </center>

	 
	 <hr color="black">

	 <marquee direction = "right">
		<i>--- Selamat Berbelanja di SayurBox ---</i><br>
	</marquee>
	<div class="footer">
				<p class="copy"> Copyright 2022 by qurrotu aini</p>
			</div>
	</div>
	</body>
</html>