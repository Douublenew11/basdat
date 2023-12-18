<?php
    include 'config.php';
    $result = $koneksi->query("SELECT * FROM warga");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        table {
            border-radius : 10px;
        }
         td a {
            text-decoration: none;
            color: black;
            margin-top : 5px;
            margin-bottom : 10px; 
        }
    
    </style>
  </head>
  <body>
    <?php include 'navbar.html'; ?>
    <a class="add btn btn-success mt-3 mb-3" style="width: 10%; margin-left: 95px; font-size: 20px" href="add.php">Tambah <i class="bi bi-person-add"></i></a>

    <div class="container-fluid ms-3">
        <table border=1 style="width: 90%; margin: auto; border-radius: 10px">
            <thead style="background-color: lightgrey; text-align: center; font-size: 23px;" >
                <th>NO</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Jenis Kelamin</th>
                <th>Kecamatan</th>
                <th>Kota</th>
                <th>Provinsi</th>
                <th>Action</th>
            </thead>
        <?php 
        $no = 1;
        while ($row = $result->fetch_assoc()): ?>
            <tbody style="text-align: center">
                <td><?= $no;?></td>
                <td><?= $row['nama']?></td>
                <td><?= $row['nik']?></td>
                <td><?= $row['jk']?></td>
                <td><?= $row['kecamatan']?></td>
                <td><?= $row['kota']?></td>
                <td><?= $row['provinsi']?></td>
                <td>
                    <a class="btn btn-warning" href="edit.php?id=<?= $row['id']; ?>">Edit <i class="bi bi-person-gear"></i></a>
                    <a class="btn btn-danger" href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?')">Hapus <i class="bi bi-person-x"></i></a>
                </td>
            </tbody>
            <?php $no++; ?>
        <?php endwhile; ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>