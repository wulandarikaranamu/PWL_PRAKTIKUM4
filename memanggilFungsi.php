<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mendeklarasikan dan Memanggil Fungsi</title>
</head>
<body>
    <?php 
    
        function bilanganPrima($mulai, $selesai) {
            for ($p=$mulai; $p<=$selesai ; $p++) { 
                if($p%2 <>0 || $p % $p <> 0) {
                    echo "$p<br>";
                }
            }
        }

        //pemanggilan fungsi
        $x = 10;
        $y = 20;

        echo "<b>Bilangan Prima Dari $x hingga $y adalah : </b></>";
        bilanganPrima($x, $y);
    
    ?>
</body>
</html>