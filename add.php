<?php
    include 'config.php';

    if (isset($_POST["submit"])) {
        $nama = $_POST['nama'];
        $nik = $_POST['nik'];
        $jk = $_POST['jk'];
        $kecamatan = $_POST['kecamatan'];
        $kota = $_POST['kota'];
        $provinsi = $_POST['provinsi'];

        $query = "INSERT INTO warga (nama, nik, jk, kecamatan, kota, provinsi) VALUES ('$nama', '$nik', '$jk', '$kecamatan', '$kota', '$provinsi')";
        $koneksi->query($query);

        header("Location: data.php");
        return 0;
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah warga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <div class="card shadow" style="width: 35%; margin-left: 35%; margin-top:7%">
            <form action="" method="post" class="ms-1 mb-1">
            <h2 style="margin-left: 21%; margin-top:2%">Tambah <b>Warga</b></h2>
                <div class="card-body">
                    <div class="input-group mb-2">
                        <input type="text" name="nama" placeholder="Masukkan Nama" style="width: 100%; border-radius:4px" required>
                    </div>
                    <div class="input-group mb-2">
                        <input type="text" name="nik" placeholder="Masukkan NIK" style="width: 100%; border-radius:4px" required>
                    </div>
                    <div class="input-group mb-2">
                        <select name="jk" id="jk" style="border-radius: 5px;">
                            <option value="">-Jenis Kelamin-</option>
                            <option value="Laki Laki">Laki Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>    
                    </div>
                    <div class="input-group mb-2">
                        <input type="text" name="kecamatan" placeholder="Masukkan Kecamatan" style="width: 100%; border-radius:4px" required>
                    </div>
                    <div class="input-group mb-2">
                        <input type="text" name="kota" placeholder="Masukkan Kota" style="width: 100%; border-radius:4px" required>
                    </div>
                    <div class="input-group mb-2">
                        <input type="text" name="provinsi" placeholder="Masukkan Provinsi" style="width: 100%; border-radius:4px" required>
                    </div>
                    <button class="btn btn-success mt-2" name="submit" type="submit" style="border-radius: 5px; width: 100%">Tambah</button>
                </div>
            </form>
        </div>
    </div>
    <a class="btn btn-primary" style="margin-left: 38%; margin-top:1%" href="data.php">Kembali</a>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>