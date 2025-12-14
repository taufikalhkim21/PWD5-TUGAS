<?php
include 'koneksi.php';

// Tambah
if (isset($_POST['tambah'])) {
    $judul  = $_POST['judul'];
    $harga  = $_POST['harga'];
    $durasi = $_POST['durasi'];

    $query = "INSERT INTO film (judul, harga, durasi) VALUES ('$judul', '$harga', '$durasi')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: ../menu.php");
        exit;
    } else {
        echo "Gagal tambah data: " . mysqli_error($koneksi);
    }
}

// Edit
if (isset($_POST['edit'])) {
    $id     = $_POST['id'];
    $judul  = $_POST['judul'];
    $harga  = $_POST['harga'];
    $durasi = $_POST['durasi'];

    $query = "UPDATE film SET judul='$judul', harga='$harga', durasi='$durasi' WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: ../menu.php");
        exit;
    } else {
        echo "Gagal edit data: " . mysqli_error($koneksi);
    }
}

// Hapus
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];

    $query = "DELETE FROM film WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: ../menu.php");
        exit;
    } else {
        echo "Gagal hapus data: " . mysqli_error($koneksi);
    }
}
?>