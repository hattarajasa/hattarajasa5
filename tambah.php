 <?php

require_once 'koneksi.php';

if (isset($_POST['submit'])) {
  $nama_dokter = $_POST['nama_dokter'];
  $spesialis = $_POST['spesialis'];
  $alamat = $_POST['alamat'];

  // id_produk bernilai '' karena kita set auto increment
  $q = $db->query("INSERT INTO datarumahsakit VALUES ('', '$nama_dokter', '$spesialis', '$alamat')");

  if ($q) {
    // pesan jika data tersimpan
    echo "<script>alert('Data produk berhasil ditambahkan'); window.location.href='index.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data produk gagal ditambahkan'); window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}
