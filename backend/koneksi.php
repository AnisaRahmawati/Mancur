<?php 
global $koneksi;

$namaserver = "localhost";
$username = "root";
$password = "";
$namadb = "mancur";

$koneksi = mysqli_connect($namaserver, $username, $password, $namadb);
if (!$koneksi) {
	die("Koneksi Gagal".mysqli_connect_error());
}
 ?>