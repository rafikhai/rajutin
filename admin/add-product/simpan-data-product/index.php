<?php
session_start();

// Menghubungkan dengan database
$query = new mysqli('localhost', 'root', '', 'rajutin');

// Menangkap data yang dikirim dari form
$nama_product = $_POST['nama_product'];
$stok_product = $_POST['stok_product'];
$kategori_product = $_POST['kategori_product'];
$keterangan_product = $_POST['keterangan_product'];

// Mengambil nama file gambar
$nama_file = $_FILES['gambar']['name'];
// Menyimpan gambar ke direktori uploads
$lokasi_file = '../../../uploads/' . $nama_file;
move_uploaded_file($_FILES['gambar']['tmp_name'], $lokasi_file);

// Menyimpan nama file gambar ke dalam database
$query->query("INSERT INTO product (nama_product, stok_product, kategori_product, keterangan_product, gambar_product) VALUES ('$nama_product', '$stok_product', '$kategori_product', '$keterangan_product', '$nama_file')");


// Menampilkan alert
echo "<script>alert('Data berhasil ditambahkan')</script>";

// Redirect ke halaman lain setelah proses selesai
header("refresh:0.1; url=../");
?>
