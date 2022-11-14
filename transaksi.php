<?php

session_start();
$id_client = $_SESSION['id_akun'];
$tanggal = date('Y-m-d');

require "config.php";

if (isset($_GET['id'])){
    $id_konten = $_GET['id'];
    $sql = "SELECT * FROM konten WHERE id = '$id_konten'";
    $res = mysqli_query($db, $sql);
    $data = mysqli_fetch_assoc($res);
    $id_worker = $data['id_akun'];

}

$harga = $data['harga'];
$status = 'selesai';
$deskripsi = $data['deskripsi'];
$judul = $data['judul'];



$query = "INSERT INTO transaksi (tanggal, judul, deskripsi, status, harga, id_client, id_worker) 
VALUES ('$tanggal', '$judul', '$deskripsi', '$status', '$harga', '$id_client', '$id_worker');";
            
$ress = mysqli_query($db, $query);

header('Location: index.php')
?>

