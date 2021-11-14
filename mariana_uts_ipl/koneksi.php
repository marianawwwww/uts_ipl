<?php
// Koneksi Database
$koneksi = mysqli_connect("localhost", "root", "", "crud");

// membuat fungsi query dalam bentuk array
function query($query)
{
    // Koneksi database
    global $koneksi;

    $result = mysqli_query($koneksi, $query);

    // membuat varibale array
    $rows = [];

    // mengambil semua data dalam bentuk array
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data)
{
    global $koneksi;

    $nim = htmlspecialchars($data['nim']);
    $nama = htmlspecialchars($data['nama']);
    $jurusan = $data['jurusan'];
    $jeniskelamin = $data['jeniskelamin'];
    $tglLahir = $data['tglLahir'];
    $email = htmlspecialchars($data['email']);
    $alamat = htmlspecialchars($data['alamat']);
    

    $sql = "INSERT INTO mahasiswaa VALUES ('$nim','$nama','$jurusan','$jeniskelamin','$tglLahir','$email','$alamat')";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}


function hapus($nim)
{
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM mahasiswaa WHERE nim = $nim");
    return mysqli_affected_rows($koneksi);
}


function ubah($data)
{
    global $koneksi;

    $nim = htmlspecialchars($data['nim']);
    $nama = htmlspecialchars($data['nama']);
    $jurusan = $data['jurusan'];
    $jeniskelamin = $data['jeniskelamin'];
    $tgllahir = $data['tgllahir'];
    $email = htmlspecialchars($data['email']);
    $alamat = htmlspecialchars($data['alamat']);

    $sql = "UPDATE mahasiswaa SET nama = '$nama', jurusan = '$jurusan', jeniskelamin = '$jeniskelamin', tgllahir = '$tgllahir', email = '$email', alamat = '$alamat' WHERE nim = $nim";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}