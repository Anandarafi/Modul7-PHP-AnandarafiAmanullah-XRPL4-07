<?php

include '../connect.php';

$nama_dosen = $_POST['nama_dosen'];
$nama_matkul = $_POST['nama_matkul'];

$query = "INSERT INTO Matkul (nama_dosen, nama_matkul)
VALUES ('$nama_dosen', '$nama_matkul')";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num > 0)
{
    echo "Berhasil Tambah Data";
}else{
    echo " Gagal Tambah Data";
}

echo "<a href='read.php'>Lihat Data</a>";

?>