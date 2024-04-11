<?php
session_start();
// menghubungkan dengan koneksi
$query = new mysqli('localhost', 'root', '', 'rajutin');

function test_input($data) {
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

// menangkap data yang dikirim dari form

$username = test_input($_POST['username']);
$password = test_input($_POST['password']);

// $username = $_POST['username']; //pakai huruf kecil + beri function php untuk jadi huruf kecil //filter
// $password = $_POST['password']; //tempel sha256; //filter

// $password_hash = password_hash($password,PASSWORD_DEFAULT);

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($query, "select * from session where username='$username'") or die(mysqli_error($query));
// $query->query("UPDATE session SET password='$password_hash' WHERE username='$username'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
    $row = mysqli_fetch_assoc($data);
    if (password_verify($password, $row["password"])){
        $_SESSION['username'] = $username;
        $_SESSION['status']   = "login";
        header("location:add-product/");
    } else {
        header("location:index.php?pesan=gagal");
    }
} else {
    header("location:index.php?pesan=gagal");
}

