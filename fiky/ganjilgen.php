<?php
$genap  = "";
$ganjil = "";
$i=1;
while($i<=100){ // bilangannya sampai 100
  $i%2==0 ? // jika i di modulus 2 hasilnya 0 maka termasuk bilangan genap kalau tidak termasuk bilangan ganjil
      $genap .= $i." "
  : 
      $ganjil .= $i." ";
  $i++;
}
 
 
echo "Bilangan Genap dari 1-100 = $genap<br/>";  // bilangannya dari 1-100 untuk bilangan genap
echo "Bilangan Ganjil dari 1-100 = $ganjil<br/>"; // bilangannya dari 1-100 untuk bilangan ganjil

?>