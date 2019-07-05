<?php
echo "<head><title>Data Tamu</title></head>";

$fp = fopen("tamu.txt", "a+"); // untuk menyimpan data yang diinput di file txt
$nama	= $_POST['nama'];
$pass	= $_POST['password'];
$jk		= $_POST['jk'];
$alamat	= $_POST['alamat'];
$asal	= $_POST['asal_kota'];

fputs($fp, "$nama|$pass|$jk|$alamat|$asal\n"); // untuk menyimpan data 
fclose($fp);
if($fp!=0){
	header("location: tamu.php");
}
else{
	echo "Data Tidak Masuk !!!";
}
