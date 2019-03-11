<!DOCTYPE html>

<?php

include '../connect.php';

$query = "SELECT * FROM Matkul";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

?>

<body>
<table border = '1'>
<h2>MataKuliah</h2>
<tr>
<th>No.</th>
<th>Nama Dosen</th>
<th>Matakuliah</th>
<th>Aksi</th>
</tr>
<?php
if($num > 0)
{
    $no = 1;
    while($data = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>" . $no . "</td>";
        echo "<td>" . $data['nama_dosen'] . "</td>";
        echo "<td>" . $data['nama_matkul'] . "</td>";
        echo "<td><a href='form-update.php?id_dosen=" . $data['id_dosen'] . "'>Edit</a> | ";
        echo "<td><a href='delete.php?id_dosen=" . $data['id_dosen'] . "' onclick='return confirm(\"Apakah Anda Yakin Ingin Menghapus Data?\")'>Hapus</a></td>";
        echo " </tr>";
        $no++;
    }
}
else{
    echo "<td colspan='3'>Tidak Ada Data</td>";
}
?>
</table>
</body>
</html>