<!-- logout.php -->

<?php 
session_start();          // mengaktifkan session
session_destroy();       // menghapus semua session
 
// // mengalihkan halaman sambil mengirim pesan logout
// header("location:../index.php?pesan=logout");
// Menampilkan alert
echo "<script>alert('Berhasil Logout')</script>";

// Redirect ke halaman lain setelah proses selesai
header("refresh:0.1; url=../");
?>
