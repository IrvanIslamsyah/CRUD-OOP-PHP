<?php
require "class/Barang.php";

if(isset($_POST["submit"])) {
    $data = [
        "nama_barang" => $_POST["nama_barang"],
        "harga" => $_POST["harga"],
        "photo" => $_POST["photo"]
    ];
    $barang = new Barang;
    $barang->tambahBarang($data);
    if($data > 0){
        echo"
            <script>
                alert('Yay!! Data berhasil ditambahkan');
                window.location = 'barang.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Yay!! Data berhasil ditambahkan');
                window.location = 'barang.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Barang</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="tambah-barang">
                    <h1>Tambah Data Barang</h1>
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="" class="form-table">Nama Barang</label>
                                <input type="text" name="nama_barang" class="form-control" required><br><br>

                                <label for="" class="form-table">Harga</label>
                                <input type="text" name="harga" class="form-control" required><br><br>

                                <label for="" class="form-table">Foto</label>
                                <input type="text" name="photo" class="form-control" required><br><br>\

                                <button type="submit" name="submit" class="bg-primary rounded p-1 ">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>