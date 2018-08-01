<?php
$host = "sql12.freesqldatabase.com"; // server
$user = "sql12249928"; // username
$pass = "7GkRVRzMxC"; // password
$database = "sql12249928"; // nama database
 
$koneksi = mysqli_connect($host, $user, $pass, $database); // menggunakan mysqli_connect
 
if(mysqli_connect_errno()){ // mengecek apakah koneksi database error
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error(); // pesan ketika koneksi database error
}
?>
