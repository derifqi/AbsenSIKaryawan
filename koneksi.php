<?php 
$koneksi = mysqli_connect("localhost", "derifqi", "iki123", "karyawansi");

if (mysqli_connect_errno()) {
	echo "koneksi gagal ".mysqli_connect_error();
}
 ?>