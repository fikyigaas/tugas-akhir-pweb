<!DOCTYPE html>
<html>
<head>
	<title>Tugas Proyek</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="header">
	
</div>

<div class="menubar">
		<ul>
			<li><a href="news.html">News</a></li>
			<li><a href="tamu.php"><b>Data Tamu</b></a></li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
</div>	

<div class="menu1">
	<ul>
			<li><a href="index.html">HOME</a></li>
			<li><a href="https://www.instagram.com/grafitakusuma/">Profil Saya</a></li>
	</ul>
</div>


<div class="menu2">
	<center>
		<h2>LIST DATA TAMU WEBSITE UAD</h2>
		<hr width="90%"> <!-- untuk mengatur tinggi -->
	<?php
	$bil = 1;
	echo "<head><title>GUEST BOOK</title></head>";

	$fp = fopen("tamu.txt", "r");
	echo "<table border=1 width=85%>";
	echo "<th>No.</th>";
	echo "<th>Nama Lengkap</th>";
	echo "<th>Password</th>";
	echo "<th>Jenis Kelamin</th>";
	echo "<th>Alamat</th>";
	echo "<th>Asal Kota</th>";
	while($isi = fgets($fp,80))
	{
		$pisah = explode("|",$isi);// untuk memisahkan isi
		echo "<tr><td><center>$bil.</center></td>";
		echo "<td>$pisah[0]</td>";
		echo "<td>$pisah[1]</td>";
		echo "<td>$pisah[2]</td>";
		echo "<td>$pisah[3]</td>";
		echo "<td>$pisah[4]</td></tr>";
	$bil++;
	}
	echo "</table>";
	echo "<br>";
	echo "<a class=btn1 href=index.html> Isi Daftar Tamu </a>&nbsp";
	echo "<a class=btn2 href=contact.html> Profil </a>";
	
	?>
	</center>
</div>

<div class="menu3">
	<center><p>Designer Web</p>
	<a target="_blank" href="img/putri.jpg">
	<img src="img/putri.jpg" width="200" height="300">
	</center>
</div>

<div class="footer">
		
</div>

</body>
</html>