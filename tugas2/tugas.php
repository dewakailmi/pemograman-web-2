<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Formulir PHP</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-4">
                <form method="GET" action="tugas.php">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Customer</label>
                        <div class="col-8">
                            <input id="nama" name="nama" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilihan Produk</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv">
                                <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input"
                                    value="kulkas">
                                <label for="produk_1" class="custom-control-label">KULKAS</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input"
                                    value="mesincuci">
                                <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                </form>
                
                <?php

                $nama = $_GET["nama"];
                $produk = $_GET["produk"];
                $jumlah = $_GET["jumlah"];
                
                if ($produk == "tv"){$harga = 4200000;}
                elseif ($produk == "kulkas"){$harga = 3100000;}
                else {$harga = 3800000;}

                $total = $harga * $jumlah;

                echo "Nama Customer: " . $nama . "<br/>";
                echo "Produk Pilihan: " . $produk . "<br/>";
                echo "Jumlah Beli: " . $jumlah . "<br/>";
                echo "Total Belanja: " . $total . "<br/>";

                ?>
            </div>
        </div>
    </div>

</body>

</html>