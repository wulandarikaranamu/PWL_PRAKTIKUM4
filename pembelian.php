<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Pembelian</title>
</head>
<body>
    <h2>Hitung Diskon</h2>
    <form action="pembelian.php" method="POST">
        <table>
            <tr>
                <td>
                    Harga Satuan : <input type="number" name="satuan">
                </td>
            </tr>
            <tr>
                <td>
                    Jumlah Barang : <input type="number" name="jumlah">
                </td>
            </tr>
                <td>
                     Diskon : 10% untuk total pembelian diatas 100.000
                </td>
            <tr>
                <td>
                    <input type="submit" name= "proses" value="PROSES">
                    <input type="reset" name= "batal" value="BATAL">
                </td>
            </tr>
        </table>
    </form>

    <?php 
    echo "Total Pembayaran Anda Adalah :";

    if(isset($_POST['proses'])) {
        $satuan = $_POST['satuan'];
        $jumlah = $_POST['jumlah'];
        $total = $satuan * $jumlah;
        $diskon = 0;
        if ($total > 100000) {
            $diskon = $total * 0.1;
        }
        $total_bayar = $total - $diskon;

        echo "</br>Harga Satuan : $satuan";
        echo "</br>Jumlah Barang : $jumlah";
        echo "</br>Total Pembelian : $total";
        echo "</br>Diskon : $diskon";
        echo "</br>Total Bayar : $total_bayar";


    }

    ?>
</body>
</html>