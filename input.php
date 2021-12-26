<?php
include"koneksi.php";



$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['program studi'];

$query = "insert INTO mahasiswa SET
								nama = '$nama',
								jenis_kelamin = '$jenis_kelamin',
								alamat = '$program_studi'
								";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
header('location:index.php');

?>

