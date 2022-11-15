<?php

session_start();

$stat = $_SESSION['status'];

if($stat == 'user' || $stat == 'admin'){

} else {
    echo "
    <script>
        alert('Silahkan Login terlebih dahulu');
        document.location.href = 'login.php';
    </script>
    ";
}

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
if($ress){
    echo "
    <script>
        alert('Transaksi berhasil');
        document.location.href = 'history.php';
    </script>
    ";
}else{
    echo "
    <script>
        alert('Transaksi gagal');
        document.location.href = 'desc.php?id=$id_konten';
    </script>
    ";
}
?>

