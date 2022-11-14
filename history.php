<?php

session_start();
require 'config.php';
$id_akun = $_SESSION['id_akun'];
$s = $_SESSION['status'];
$username = $_SESSION['username'];
if($s == 'user' || $s == 'admin'){
    $sql = "SELECT * FROM transaksi WHERE id_client = '$id_akun' OR id_worker = '$id_akun'";
    $res = mysqli_query($db, $sql);
    
} else {
    header('Location: login.php');
}



?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="history.css">
</head>

<body>
    
<header>
            <ul>
                <img src="asset/logo.png" width="50px">
                <li><a href="index.php">Beranda</a></li>
                <?php
                if($s == 'user' || $s == 'admin'){
                  echo "<li><a href='profil.php'>$username</a></li>
                        <li><a href='logout.php'>Log Out</a></li>";
                } else {
                  echo "<li><a href='login.php'>Sign In</a></li>
                        <li><a href='regis.php'>Join</a></li>";
                }
                
                if($status == 'admin'){
                  echo "<li><a href='admin.php'>Menu Admin </a></li>";
                }
                ?>

            </ul>
        </header>


    <div id="tabel-transaksi">
            <section>
                <h1 class="judul-tabel">Daftar Transaksi</h1>
                <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Status</th>
                        <th>Harga</th>
                    </tr>
                    </thead>
                </table>
                </div>
                <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
<?php
while($data = mysqli_fetch_assoc($res)){

?>
                    <tr>
                        <td><?=$data['tanggal']?></td>
                        <td><?=$data['judul']?></td>
                        <td><?=$data['deskripsi']?></td>
                        <td><?=$data['status']?></td>
                        <td><?=$data['harga']?></td>
                    </tr>
                    
<?php

}
?>
                    </tbody>
                </table>
                </div>
            </section>
    </div>

    <div>
    </div>
</body>
</html>