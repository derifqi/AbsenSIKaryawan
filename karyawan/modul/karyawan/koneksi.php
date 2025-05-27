<?php 
$koneksi = mysqli_connect("localhost", "derifqi", "iki123", "karyawansi");

if (mysqli_connect_errno()) {
	echo "koneksi gagal " . mysql_connect_error();
}
 ?>