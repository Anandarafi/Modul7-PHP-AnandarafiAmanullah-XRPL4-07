<!DOCTYPE html>
<?php
include '../connect.php';

$id_dosen = $_GET['id_dosen'];

$query = "SELECT * FROM Matkul Where id_dosen = $id_dosen";

$result = mysqli_query($connect, $query);

$row = mysqli_fetch_assoc($result);

?>

<body>
<form action="update.php" method="POST">
<table>
<tr>
<td><label for="nama">Nama Dosen</label></td>
<td>:</td>
<td><input type="text" name="nama_dosen" id="nama" value="<?php echo $row['nama_dosen']; ?>"></td>
</tr>
<tr>
<td><label for="nama_matkul">Matakuliah</label></td>
<td>:</td>
<td><input type="text" name="nama_matkul" id="nama_matkul" value="<?php echo $row['nama_matkul']; ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_dosen" value="<?php echo $row['id_dosen']; ?>"></td>
</td><input type="submit" value="Simpan" name="btnSimpan"></td>
</tr>
</table>
</form>
</body>
</html>