<?php 

include 'koneksi.php';

$no_dokter = $_POST['no_dokter'];
$nama_dokter = $_POST['nama_dokter'];
$spesialis = $_POST['spesialis'];
$alamat = $_POST['alamat'];


mysqli_query($koneksi,"insert into rumahsakit values('$no_dokter','$nama_dokter','$spesialis','$alamat')");

header("location:index.php");

?>