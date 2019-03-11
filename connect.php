<?php

$host = "localhost";
$db = "db_universitas";
$username = "root";
$pass = "";

$connect = mysqli_connect($host, $username, $pass, $db);

if(!$connect)
{
    echo "Koneksi ke database gagal : " . mysqli_connect_error();
}

?>