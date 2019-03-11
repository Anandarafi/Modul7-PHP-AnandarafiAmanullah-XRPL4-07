<?php

include '../connect.php';

$id_dosen = $_POST['id_dosen'];
$nama_dosen = $_POST['nama_dosen'];
$nama_matkul = $_POST['nama_matkul'];

$query = "UPDATE Matkul SET nama_dosen = '$nama_dosen', nama_matkul = '$nama_matkul' WHERE id_dosen = '$id_dosen'";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num > 0)
{
    echo "Berhasil Update data <br>";
}
else{
    echo "Gagal Update Data <br>";
}
echo "<a href='read.php'>Lihat Data</a>";

?>