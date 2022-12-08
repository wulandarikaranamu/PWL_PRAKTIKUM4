<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY</title>
</head>
<body>
    <h2>Latihan Membuat Array</h2>

    <?php 
    
    //membuat array berindex
    $kategoribuku[0] = "Pemprograman Web";
    $kategoribuku[1] = "Database";
    $kategoribuku[2] = "Desain Grafis";
    $kategoribuku[3] = "Internet";
    $kategoribuku[4] = "Ofiice Aplication";

    //membuat array asosiatif 
    $buku = array("isbn" => "9787-8986785-9",
                    "judul" => "Modul Pemprograman Web Lanjut",
                    "pengarang" => "kategori dewi arum",
                    "penerbit" => "andi offset");

    //mengakses array berindex menggunakan for
    echo "<strong>Daftar Kategori Buku :</strong><br>";
        for ($i=0; $i < sizeof($kategoribuku); $i++) { 
            echo "nama buku $i :",$kategoribuku[$i]."<br>";
        }


    //mengakses array asosiatif menggunakan foreach
    echo "<strong>Contoh Buku :</strong><br>";
        foreach ($buku as $key => $value) {
    echo "$key : $value" . "<br>";
        }
    
    ?>
</body>
</html>