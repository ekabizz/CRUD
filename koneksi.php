<?php  

	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "latihanweb";

	$connect = mysqli_connect($host, $user, $pass) or die("Koneksi gagal");
	$dbselect = mysqli_select_db($connect, $dbname) or die("Database tidak ditemukan");

?>
