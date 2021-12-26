<?php
include"koneksi.php";



$id = $_POST['id_mahasiswa'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$program_studi = $_POST['program_studi'];

$query = "UPDATE mahasiswa SET
								nama = '$nama',
								jenis_kelamin = '$jenis_kelamin',
								program_studi = '$program_studi'
								WHERE id_mahasiswa = '$id'
								";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
header('location:index.php');

?>

