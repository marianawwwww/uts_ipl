<?php
session_start();
require 'koneksi.php';

$nim = $_GET['nim'];

$mahasiswa = query("SELECT * FROM mahasiswaa WHERE nim = $nim")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data siswa berhasil diubah!');
                document.location.href = 'dataadmin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data siswa gagal diubah!');
            </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="cover.css">

    <title>CRUD</title>
</head>


    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cover/">

    

    <!-- Bootstrap core CSS -->
<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Universitas Sidu</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="indexadmin.php">Home</a>
        <a class="nav-link" href="dataadmin.php">Data Mahasiswa</a>
        <a class="nav-link" href="#">About</a>
        <a class="nav-link" href="logout">Logout</a>
      </nav>
    </div>
  </header>

    <!-- Container -->
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h3 class="fw-light text-uppercase"><i class="bi bi-pencil-square"></i>&nbsp;Ubah Mahasiswa</h3>
            </div>
            <hr>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="number" class="form-control w-50" id="nim" value="<?= $mahasiswa['nim']; ?>" name="nim" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control w-50" id="nama" value="<?= $mahasiswa['nama']; ?>" name="nama" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select class="form-select w-50" id="jurusan" name="jurusan">
                            <option disabled selected value>Pilih Jurusan</option>
                            <option value="Sistem Informasi" <?php if ($mahasiswa['jurusan'] == 'Sistem Informasi') { ?> selected='' <?php } ?>>Sistem Informasi</option>
                            <option value="Manajemen Informasi" <?php if ($mahasiswa['jurusan'] == 'Manajemen Informasi') { ?> selected='' <?php } ?>>Manajemen Informasi</option>
                            <option value="Hukum" <?php if ($mahasiswa['jurusan'] == 'Hukum') { ?> selected='' <?php } ?>>Hukum</option>
                            <option value="Psikologi" <?php if ($mahasiswa['jurusan'] == 'Psikologi') { ?> selected='' <?php } ?>>Psikologi</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jeniskelamin" id="Laki-Laki" value="Laki-Laki" <?php if ($mahasiswa['jeniskelamin'] == 'Laki-Laki') { ?> checked='' <?php } ?>>
                            <label class="form-check-label" for="Laki-Laki">Laki-Laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jeniskelamin" id="Perempuan" value="Perempuan" <?php if ($mahasiswa['jeniskelamin'] == 'Perempuan') { ?> checked='' <?php } ?>>
                            <label class="form-check-label" for="Perempuan">Perempuan</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tgllahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control w-50" id="tgllahir" value="<?= $mahasiswa['tgllahir']; ?>" name="tgllahir" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control w-50" id="email" value="<?= $mahasiswa['email']; ?>" name="email" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control w-50" id="alamat" rows="5" name="alamat" autocomplete="off"><?= $mahasiswa['alamat']; ?></textarea>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-warning" name="ubah">Ubah</button>    
                    <a href="dataadmin.php" class="btn btn-outline-light">Kembali</a>
                </form>
            </div>
        </div>
    </div>
    

</body>

</html>