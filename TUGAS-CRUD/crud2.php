<?php

use LDAP\Result;

include 'koneksi.php';


if(isset($_POST ['tambah'])){
    $judul = $_POST['judul'];
    $harga = $_POST['harga'];
    $durasi = $_POST['durasi'];

    $query = "INSERT INTO film (judul, harga, durasi) VALUES ('$judul','$harga','$')";
    $result = mysqli_query($koneksi, $query);

    if($result){
        header("Location: ../menu.php");
        exit;
    } else {
        echo "gagal menambah data" . mysqli_error($koneksi);
    }
}

if(isset($_POST ['update'])){
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $harga = $_POST['harga'];
    $durasi = $_POST['durasi'];

    $query = "UPDATE film SET judul='$judul', harga='$harga', durasi='$durasi' WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);

    if($result){
        header("Location: ../menu.php");
        exit;
    } else {
        echo "update data gagal" . mysqli_error($koneksi);
    }
}

if(isset($_GET ['hapus'])){
    $id = $_GET['hapus'];

    $query = "DELETE FROM film WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);

    if($result){
        header("Location: ../menu.php");
        exit;
    } else {
        echo "gagal delete". mysqli_error($koneksi);
    }
}