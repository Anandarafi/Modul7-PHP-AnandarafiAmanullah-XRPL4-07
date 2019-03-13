# Modul7-PHP-AnandarafiAmanullah-XRPL4-07

berhasilUpdate
![alttext](https://github.com/Anandarafi/Modul7-PHP-AnandarafiAmanullah-XRPL4-07/blob/master/berhasilUpdate.PNG)

berhasilmenambahdata
![alttext](https://github.com/Anandarafi/Modul7-PHP-AnandarafiAmanullah-XRPL4-07/blob/master/berhasilmenambahdata.PNG)

connect
![alttext](https://github.com/Anandarafi/Modul7-PHP-AnandarafiAmanullah-XRPL4-07/blob/master/connect.PNG)

database
![alttext](https://github.com/Anandarafi/Modul7-PHP-AnandarafiAmanullah-XRPL4-07/blob/master/database.PNG)

form-create
![alttext](https://github.com/Anandarafi/Modul7-PHP-AnandarafiAmanullah-XRPL4-07/blob/master/form-create.PNG)

hasilpenghapusan%2BupdateDat
![alttext](https://github.com/Anandarafi/Modul7-PHP-AnandarafiAmanullah-XRPL4-07/blob/master/hasilpenghapusan%2BupdateData.PNG)

lihatdata
![alttext](https://github.com/Anandarafi/Modul7-PHP-AnandarafiAmanullah-XRPL4-07/blob/master/lihatdata.PNG)

penghapusanDat
![alttext](https://github.com/Anandarafi/Modul7-PHP-AnandarafiAmanullah-XRPL4-07/blob/master/penghapusanData.PNG)

read
![alttext](https://github.com/Anandarafi/Modul7-PHP-AnandarafiAmanullah-XRPL4-07/blob/master/read.PNG)

tambahdatadosen
![alttext](https://github.com/Anandarafi/Modul7-PHP-AnandarafiAmanullah-XRPL4-07/blob/master/tambahdatadosen.PNG)

Matkul
![alttext](https://github.com/Anandarafi/Modul7-PHP-AnandarafiAmanullah-XRPL4-07/blob/master/matkul.PNG)

UpdateData
![alttext](https://github.com/Anandarafi/Modul7-PHP-AnandarafiAmanullah-XRPL4-07/blob/master/updateData.PNG)



SOAL
1. Berikan contoh kode keneksi untuk ke database pd php?
2. Bagaimana cara anda membuat database pada phpMySQl!
3. Berikan code query untuk menampilkan sebuah data yang ada pada ke database?
4. Berikan code query untuk mengupdate sebuah data yang ada pada ke database?
5. Berikan code query untuk menghapus sebuah data yang ada pada ke database?


Jawab 
1. ![alttext](https://github.com/Anandarafi/Modul7-PHP-AnandarafiAmanullah-XRPL4-07/blob/master/ini%20contoh%20dari%20kode%20konect%20pada%20php.PNG)
{$connect = mysqli_connect($host, $username, $pass, $db);} kode tersebut digunakan untuk mengkonekkan mysqli_connect dengan parameter variabel hos, variabel username, dvariabel pass, dan variabel database.

2. cara membuat database yang mudah saya membuka link 'localhost/phpmyadmin/' di website tetapis aya menghidupkan mysql dan apache di xampp. dan saya memilih menubar database dan create database dengan nama yang disesuaikan nama database di visual studio(editor biasa) ..Contoh kode $db = "db_universitas" dan di localhost/phpadminnya disesuaikan databasenya dengan db_universitas supaya berhasil konect.

3.  ![alttext](https://github.com/Anandarafi/Modul7-PHP-AnandarafiAmanullah-XRPL4-07/blob/master/query%20menampilkan.PNG)
 {$query = "SELECT * FROM Dosen";} itu menampilkan seluruh data yangterdapat di table bernama Dosen yang telah saya bikin di phpmyadmin dnegan database yang telah dibikin tadi.
 
 4. ![alttext](https://github.com/Anandarafi/Modul7-PHP-AnandarafiAmanullah-XRPL4-07/blob/master/4.PNG)
 {$query = "UPDATE Dosen SET nama_dosen = '$nama_dosen', telp = '$telp' WHERE id_dosen = '$id_dosen'";} itu mengupdate seluruh data dyang terdapat di kolom atau table dengan variabel nama_dosen dan telp yag dimana id_dosennya sesuai dengan id_dosen yang telah dibikin. dengan begitu kita bisa mengupdate data kita di kolom nama_dosen dan telp dikarenakan sudah ada kode update dosen set nama_dosen dan telp yang dimana nama_dosen = $nama_dosen (sesuai nama tabel nama_dosen) dan telp = $telp (sesuai nama tabel telp). dan dimana disesuaikan dengan id_dosennya. id_dosennya sebagai primary key yang setiap datanya id_dosen berbeda
 
 5. ![alttext](https://github.com/Anandarafi/Modul7-PHP-AnandarafiAmanullah-XRPL4-07/blob/master/5.PNG)
 {$query = "DELETE FROM Dosen WHERE id_dosen = $id_dosen";} itu kode untuk menghapus data yang terdapat di table Dosen tanpa memilh nama_dosen dan telp yang ingin kita hapus tetapi seluruh data kita hapus dengan menggunakan kode from Dosen yang dimana kita memilih id_dosen = $id_dosen (kita menghapus hanya yang kita pilih id_dosennya bukan seluruh data ditabel, tetapi seluruh data di id_dosen tersebut).id_dosennya sebagai primary key yang setiap datanya id_dosen berbeda
