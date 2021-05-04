<?php

require_once 'koneksi.php';

// cek id
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // ambil data berdasarkan id_dokter
  $q = $db->query("SELECT * FROM datarumahsakit WHERE id_dokter = '$id'");

  foreach ($q as $dt) :
  ?>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <br>
  <br>
  <h2 align="center">Halaman Ubah Data Dokter</h2>
  <br>
  	<form action="proses_update.php" method="post" align="center">
		<input type="hidden" name="id_dokter" value="<?= $dt['id_dokter'] ?>">
		<input type="text" name="nama_dokter" value="<?= $dt['nama_dokter'] ?>">
		<input type="text" name="spesialis" value="<?= $dt['spesialis'] ?>">
		<input type="text" name="alamat" value="<?= $dt['alamat'] ?>">
		<input type="submit" name="submit" value="Ubah Data" button type="button" class="btn btn-primary btn-sm">
		<a href="index.php" button type="button" class="btn btn-warning btn-sm"> Kembali </a> 
  	</form>

  <?php
  endforeach;
}