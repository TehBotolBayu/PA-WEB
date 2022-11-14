<?php
error_reporting(0);

$server = 'localhost';
$username = 'root';
$password = '';
$db = 'paweb';
 
$msg = "";
 
$db = mysqli_connect($server, $username, $password, $db);

if(!$db){
    die("gagal terhubung");
}
?>