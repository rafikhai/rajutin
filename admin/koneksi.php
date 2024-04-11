<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "rajutin";

	$koneksi = new mysqli($hostname,$username,$password,$database);
    if ($koneksi->connect_error) {
        die("Maaf, koneksi gagal: " . $koneksi->connect_error);
    } else {
        
        // Lanjutkan dengan operasi lain yang memerlukan koneksi ke database
    }
?>
