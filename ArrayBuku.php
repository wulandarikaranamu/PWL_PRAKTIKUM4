<?php 
$bukuNgoding = array("Buku PHP", "Buku Python", "Buku JavaS cript");


echo "<strong>Daftar Kategori Buku Ngoding : </strong><br>";
for ($b=0; $b < sizeof($bukuNgoding); $b++) {
    echo "Nama Buku $b :" . $bukuNgoding[$b] . "<br>";
}

?>