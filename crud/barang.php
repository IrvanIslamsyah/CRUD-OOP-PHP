<?php
include 'class/Barang.php';
$barang = new Barang();
$dataBarang = $barang->tampilDataBarang();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Data Barang</title>
</head>
<body>
    <div class="row">
        <div class="col-12 text-center">
            <div class="barang text-center">
                <h1>Data Barang</h1>
                <div class="tambah-data">
                    <a href="tambahBarang.php" class="text-bg-primary p-1 rounded-pill">Tambah Data</a><br>
                </div>
                <table border="1" cellpading="10" cellspacing="0" class="table">
                    <tr>
                        <th>No .</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Foto</th>
                        <th>Opsi</th>
                    </tr>
                    
                    <?php $i = 1; ?>
                    <?php foreach($dataBarang as $data) : ?>
                    
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $data["nama_barang"]; ?></td>
                        <td>Rp. <?= number_format($data["harga"]); ?></td>
                        <td><img src="foto/<?= $data["photo"]; ?>" alt="" width="90"></td>
                        <td>
                            <a href="editBarang.php?id=<?= $data["id_barang"]; ?>" class="edit text-bg-success p-1 rounded-pill">Edit</a>
                            <a href="hapusBarang.php?id=<?= $data["id_barang"]; ?>" class="hapus text-bg-danger p-1 rounded-pill" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>