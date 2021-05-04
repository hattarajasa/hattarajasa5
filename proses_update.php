<?php

require_once 'koneksi.php';

if (isset($_POST['submit'])) {
  $id = $_POST['id_dokter'];
  $nama_dokter = $_POST['nama_dokter'];
  $spesialis = $_POST['spesialis'];
  $alamat = $_POST['alamat'];
  
  // update data berdasarkan id_produk yg dikirimkan
  $q = $db->query("UPDATE datarumahsakit SET nama_dokter = '$nama_dokter', spesialis = '$spesialis', alamat = '$alamat' WHERE id_dokter = '$id'");

  if ($q) {
    // pesan jika data berubah
    echo "<script>alert('Data Dokter berhasil diubah'); window.location.href='index.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data Dokter gagal diubah'); window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}