<?php
error_reporting(0);

$server = 'sql205.epizy.com';
$username = 'epiz_32998354';
$password = 'uD4pO3yK6Kqe';
$db = 'epiz_32998354_paweb';
 
$msg = "";
 
$db = mysqli_connect($server, $username, $password, $db);

if(!$db){
    die("gagal terhubung");
}
?>