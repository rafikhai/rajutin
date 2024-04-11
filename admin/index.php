<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>RajuTin - Login Admin</title>
	<link rel="icon" type="img/png" href="assets/img/logoweb.png" />
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<!--font google poppins-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap">

	<!-- Custom CSS -->
	<style>
		/* Animasi loading */
		@keyframes spin {
			0% {
				transform: rotate(0deg);
			}

			100% {
				transform: rotate(360deg);
			}
		}

		body {
			background-color: #f8f9fa;
			margin: 0;
			padding: 0;
			font-family: 'Poppins', sans-serif;
			overflow: hidden;
			/* Menghilangkan scroll */
		}

		.container {
			padding-top: 100px;
		}

		.card {
			border: none;
			border-radius: 30px;
			box-shadow: 0 10px 8px rgba(0, 0, 0, 0.5);
			animation: fadeInUp 1s ease forwards;
			/* Animasi fade in dari atas */
		}

		@keyframes fadeInUp {
			0% {
				opacity: 0;
				transform: translateY(-50px);
			}

			100% {
				opacity: 1;
				transform: translateY(0);
			}
		}

		.card-title {
			color: #333;
			font-weight: bold;
			font-family: 'Poppins', 'sans-serif';
		}

		.card-text {
			color: #666;
		}

		.btn-primary {
			background-color: orange;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			font-size: 18px;
			font-weight: bold;
			transition: background-color 0.3s ease-in-out;
			outline: none;
			/* Menghilangkan outline biru pada tombol */
		}

		.btn-primary:focus,
		.btn-primary.focus {
			background-color: orange !important;
			/* Menetapkan warna latar belakang saat tombol ditekan */
		}

		.btn-primary:hover {
			background-color: #ee4d2d;
		}

		.spinner {
			border: 4px solid rgba(0, 0, 0, 0.1);
			border-left-color: #007bff;
			border-radius: 50%;
			width: 50px;
			height: 50px;
			animation: spin 1s linear infinite;
			margin: 20px auto;
		}

		.video-container {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			overflow: hidden;
			z-index: -1;
		}

		.video-overlay {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0, 0, 0, 0.5);
			/* Warna overlay hitam dengan opacity 0.5 */
		}

		.background-image {
			width: 100%;
			height: 100%;
			object-fit: cover;
			filter: blur(8px);
			/* Efek blur */
		}

		.popup h6 {
			font-size: 14px;
			/* Ubah ukuran font menjadi lebih kecil */
		}

		body {
			font-family: 'Poppins', sans-serif;
			/* Menggunakan font Poppins */
		}

		.input-group {
			margin-bottom: 15px;
		}

		.input-group label {
			display: block;
			margin-bottom: 5px;
		}

		.input-group input {
			width: 100%;
			padding: 10px;
			border-radius: 3px;
			border: 1px solid #ccc;
		}
		span{
			color: orange;
		}
	</style>
</head>

<body>
	<!-- Background image with blur effect -->
	<div class="video-container">
		<div class="video-overlay"></div>
		<img class="background-image" src="../assets/img/welcome.jpg" alt="Background Image">
	</div>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-4">
				<div class="card text-center p-5">
					<div class="form">
						<form class="card-title" method="POST" action="cek_login.php">
							<h1 class="card-title mb-5">Raju<span>Tin</span></h1>
							<div class="input-group">
								<label for="username">Username:</label>
								<input type="text" onkeyup="this.value = this.value.toLowerCase()" id="username" name="username" placeholder="Masukkan username" required>
							</div>

							<div class="input-group">
								<label for="password">Password:</label>
								<input type="password" id="password" name="password" placeholder="Masukkan password" required>
							</div>
							<button type="submit" class="btn btn-primary">Login</button>
							

							<?php
							if (isset($_GET['pesan'])) {
								if ($_GET['pesan'] == "gagal") {
							?>
									<br>
								<?php
									echo "Login gagal ! ";
									echo "Username atau password salah.";
								} else if ($_GET['pesan'] == "logout") {
								?>
									<br>
								<?php
									echo "<script>alert('Anda berhasil logout')</script>";
								} else if ($_GET['pesan'] == "belum_login") {
								?>
									<br>
							<?php

									echo "<script>alert('Anda harus login untuk mengakses halaman admin')</script>";

									echo "<center> <font color='red'> *Anda harus login untuk mengakses halaman admin* </center> </font>";
								}
							}
							?>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<script>
		// Menampilkan popup ketika tombol diklik
		$('#popupButton').click(function() {
			$('#popup').fadeIn();
			setTimeout(function() {
				window.location.href = "home/";
			}, 3000); // Mengarahkan ke halaman beranda dalam 3 detik
		});
	</script>
</body>

</html>