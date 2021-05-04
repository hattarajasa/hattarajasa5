<?php
require_once 'koneksi.php';
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>
<html>
<head>
	<title>RS Nabila Maulida</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>

</head>
<body>
	<div class="alert alert-success">
	<center> Selamat Datang di RS Nabila Maulida, <b><?php echo $username;?></b> <a href="logout.php" button type="button" class="btn btn-warning btn-sm"><b>Logout</b></a> </center>
	</div>

   

   	<h2><center> Data Rumah Sakit Nabila Maulida</center></h2>
	<br/>
	<form method="post" action="tambah.php">
		<div class="form-group" align="center">
			<input type="text" name="nama_dokter" placeholder="Nama Dokter">
		</div>
		<div class="form-group" align="center">
    		<input type="text" name="spesialis" placeholder="Spesialis">
		</div>
		<div class="form-group" align="center">
    		<input type="text" name="alamat" placeholder="Alamat">
    	</div>

    	<br>
    	<div class="form-group" align="center">
    		<input type="submit" name="submit" value="Tambah Data" button type="button" class="btn btn-primary btn-sm">
    	</div>
  	</form><br/></div>

	<div class="container">

	<table border="1" class="table table-hover">
		<tr>
			<th>No </th>
			<th>Nama Dokter</th>
			<th>Spesialis</th>
			<th>Alamat</th>
			<th colspan="2"> </th>
		</tr>

		<?php
    	// Tampilkan semua data
    	$q = $db->query("SELECT * FROM datarumahsakit");

    	$no = 1; // nomor urut
   		while ($dt = $q->fetch_assoc()) :
    	?>

    	<tr>  
    		<td><?= $no++ ?></td>
    		<td><?= $dt['nama_dokter'] ?></td>
    		<td><?= $dt['spesialis'] ?></td>
    		<td><?= $dt['alamat'] ?></td>
    		<td><a href="update.php?id=<?= $dt['id_dokter'] ?>" button type="button" class="btn btn-warning">Ubah</a></td>
    		<td><a href="hapus.php?id=<?= $dt['id_dokter'] ?>" button type="button" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
    </tr>

    <?php
    endwhile;
    ?> 
	</table>

</div>
</body>
</html>