<?php

session_start();
require 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$query = "select * from akun where id='$id'";
$result = mysqli_query($db, $query);
$data = mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){
    $stat = $_POST["status"];
    $result = mysqli_query($db, "UPDATE akun SET status='$stat' WHERE id='$id'");

    if($result){
        echo "<script>
            alert('DATA TERUPDATE!');
            document.location.
             href = 'admin.php'
            </script>";
    } else {
        echo "<script>alert('DATA GAGAL DISIMPAN')</script>";
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formakun.css">
</head>
<body>
    <div class="wrapper">
        <div class="title">
          EDIT AKUN
        </div>

        <form method="POST" class="form" action="" enctype="multipart/form-data">
            

            <div class="inputfield">
            <label for="lang"><b>STATUS</b></label>
                <select name="status" id="lang">
                    <option value="admin">admin</option>
                    <option value="user">user</option>
                    <option value="ban">ban</option>
                </select>
            </div>
                

            <div class="inputfield">
                <input type="submit" value="Upload" class="btn" name="submit">
            </div>



        </form>
</body>
</html>