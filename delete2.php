<?php
session_start();

    require "config.php";


    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $table = $_GET['table'];
        $query = "delete from $table where id='$id'";
        $result = mysqli_query($db, $query);
    
        if($result){
            echo "<script>
                alert('DATA TERHAPUS!');
                document.location.href = 'admin.php'
                </script>";
                header('Location: admin.php');
        } else {
            echo "<script>alert('DATA GAGAL TERHAPUS')</script>";
        }
    
    }
    header('Location: admin.php');
?> 