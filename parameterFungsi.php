<?php 
//fungsi dengan parameter
    function cetak_ganjil ($awal, $akhir) {
        for ($i=$awal; $i<$akhir ; $i++) { 
            if ($i%2 == 1) {
                echo "$i ";
            }
        }
    }
    //pemanggilan fungsi
    $a = 10;
    $b = 20;
    echo "<b>Bilangan Ganjil dari $a sampai  $b : </b></br>";
    cetak_ganjil($a, $b);
?>