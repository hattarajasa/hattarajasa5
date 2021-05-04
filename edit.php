<!DOCTYPE html>
<html>
<head>
	<title>Edit </title>
</head>
<body>

	<h2> Data Rumah Sakit</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>Edit Data Rumah Sakit</h3>

	<?php
	include 'koneksi.php';
	$no_dokter = $_GET['no_dokter'];
	$data = mysqli_query($koneksi,"select * from rumahsakit where no_dokter='$no_dokter'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>No Dokter</td>
					<td>
						<input type="hidden" name="no_dokter" value="<?php echo $d['no_dokter']; ?>">
						<input type="number" name="no_dokter" value="<?php echo $d['no_dokter']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama Dokter</td>
					<td><input type="text" name="nama_dokter" value="<?php echo $d['nama_dokter']; ?>"></td>
				</tr>
				<tr>
					<td>Spesialis</td>
					<td><input type="text" name="spesialis" value="<?php echo $d['spesialis']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

</body>
</html>