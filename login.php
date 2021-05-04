<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("koneksi.php");
?>

<title>Form Login</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
<div class="container" align='center'>
  <form action="proseslogin.php" method="post">
  <table>
  <tbody>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  	<h1><center> Selamat Datang di RS Nabila Maulida </center></h1>
	<h2><center> Silahkan login terlebih dahulu untuk mengakses web ini</center></h2>
  <div class="form-group">
    <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
  </div>
  <div class="form-group">
    <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
  </div>
  <tr><td colspan="2" align="right"><input value="Login" type="submit" button type="button" class="btn btn-primary btn-sm"> <input value="Batal" type="reset" button type="button" class="btn btn-warning btn-sm"></td></tr>
  </tbody>
  </table>
  </form>
</div>