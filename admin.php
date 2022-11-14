<?php
error_reporting(0);
session_start();
$status = $_SESSION['status'];
$id_akun = $_SESSION['id_akun'];
require "config.php";

if($status == 'admin'){
  $query = "select * from akun where id=$id_akun";
  $result = mysqli_query($db, $query);
  $data = mysqli_fetch_assoc($result);

  $username = $data['username'];

} else {
	header('Location: login.php');
}

?>

<!DOCTYPE html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="admin.css">
	<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</head>

<body>
    <header>
            <ul>
                <img src="asset/logo.png" width="50px">
				<li><a href='profil.php'><?=$username;?></a></li>
                <li><a href='logout.php'>Log Out</a></li>
                
                <li><a href="index.php">Beranda</a></li>
            </ul>
        </header>
    <main>
		<h1 align="center">Akun</h1>
		<div class="tabel" id="akun">
			<table>
				<tr id="theader">
					<th>
						email
					</th>
					<th>
						username
					</th>
					<th>
						status
					</th>    
					<th>
						Option
					</th>
				</tr>
				<?php
				$query = "select * from akun";
				$result = mysqli_query($db, $query);
				$len = 1;
				while ($data = mysqli_fetch_assoc($result)) {
				?>
				<tr class="datarow">
					<td><?=$data['email']; ?></td>
					<td><?=$data['username']; ?></td>
					<td><?=$data['status']; ?></td>
					<td>
						<a href="formakun.php?id=<?=$data['id']?>&table=<?='akun'?>" class="buttondata U">Edit</a>
						<a href="delete.php?id=<?=$data['id']?>&table=<?='akun'?>" class="buttondata U">Delete</a>
					</td>
				</tr>
				<?php
				$len += 1;
				}
				?>
			</table>
		</div>
		<h1 align="center">Permintaan</h1>
		<div class="tabel" id="permintaan">
			<table>
				<tr id="theader">
					<th>
						Judul
					</th>
					<th>
						Deskripsi
					</th>
					<th>
						Skill
					</th>
					<th>
						Kategori
					</th>
					<th>
						Harga
					</th>
					<th>
						Tanggal
					</th>
					<th>
						Option
					</th>
				</tr>
				<?php
				$query = "select * from konten where tipe='t'";
				$result = mysqli_query($db, $query);
				$len = 1;
				while ($data = mysqli_fetch_assoc($result)) {
				?>
				<tr class="datarow">
					<td><?=$data['judul']; ?></td>
					<td><?=$data['deskripsi']; ?></td>
					<td><?=$data['skill']; ?></td>
					<td><?=$data['kategori']; ?></td>
					<td><?=$data['harga']; ?></td>
					<td><?=$data['tanggal']; ?></td>
					<td>
						<a href="delete.php?id=<?=$data['id']?>&table=<?='konten'?>" class="buttondata U">Delete</a>
					</td>
				</tr>
				<?php
				$len += 1;
				}
				?>
			</table>
		</div>
		<h1 align="center">Penawaran</h1>
		<div class="tabel" id="penawaran">
			<table>
				<tr id="theader">
					<th>
						Judul
					</th>
					<th>
						Deskripsi
					</th>
					<th>
						Skill
					</th>
					<th>
						Kategori
					</th>
					<th>
						Harga
					</th>
					<th>
						Tanggal
					</th>
					<th>
						Option
					</th>
				</tr>
				<?php
				$query = "select * from konten where tipe='l'";
				$result = mysqli_query($db, $query);
				$len = 1;
				while ($data = mysqli_fetch_assoc($result)) {
				?>
				<tr class="datarow">
					<td><?=$data['judul']; ?></td>
					<td><?=$data['deskripsi']; ?></td>
					<td><?=$data['skill']; ?></td>
					<td><?=$data['kategori']; ?></td>
					<td><?=$data['harga']; ?></td>
					<td><?=$data['tanggal']; ?></td>
					<td>
						<a href="delete.php?id=<?=$data['id']?>&table=<?='konten'?>" class="buttondata U">Delete</a>
					</td>
				</tr>
				<?php
				$len += 1;
				}
				?>
			</table>
		</div>
		<h1 align="center">Transaksi</h1>
		<div class="tabel" id="transaksi">
			<table>
				<tr id="theader">
					<th>
						Tanggal
					</th>
					<th>
						judul
					</th>
					<th>
						Deskripsi
					</th>
					<th>
						Status
					</th>
					<th>
						Harga
					</th>
				</tr>
				<?php
				$query = "select * from transaksi";
				$result = mysqli_query($db, $query);
				$len = 1;
				while ($data = mysqli_fetch_assoc($result)) {
				?>
				<tr class="datarow">
					<td><?=$data['tanggal']; ?></td>
					<td><?=$data['judul']; ?></td>
					<td><?=$data['deskripsi']; ?></td>
					<td><?=$data['status']; ?></td>
					<td><?=$data['harga']; ?></td>
				</tr>
				<?php
				$len += 1;
				}
				?>
			</table>
		</div>
		<h1 align="center">Artikel</h1>
		<div class="tabel" id="artikel">
			<table>
				<tr id="theader">
					<th>
						Judul
					</th>
					<th>
						Isi
					</th>
					<th>
						Gambar
					</th>
					<th>
						Tanggal
					</th>
					<th>
						Option
					</th>
				</tr>
				<?php
				$query = "select * from artikel";
				$result = mysqli_query($db, $query);
				$len = 1;
				while ($data = mysqli_fetch_assoc($result)) {
				?>
				<tr class="datarow">
					<td><?=$data['judul']; ?></td>
					<td><?=$data['isi']; ?></td>
					<td><?=$data['gambar']; ?></td>
					<td><?=$data['tanggal']; ?></td>
					<td>
						<a href="formartikel.php?id=<?=$data['id']?>&table=<?='artikel'?>" class="buttondata U">Edit</a>
						<a href="delete.php?id=<?=$data['id']?>&table=<?='artikel'?>" class="buttondata U">Delete</a>
					</td>
				</tr>
				<?php
				$len += 1;
				}
				?>
			</table>
		</div>
	</main>
</body>