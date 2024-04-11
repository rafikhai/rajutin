<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rajutin - Selamat Datang</title>
  <link rel="icon" type="img/png" href="../assets/img/logoweb.png" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!--font google poppins-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap">
  <!-- Core theme CSS-->
  

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
      font-family: Arial, sans-serif;
      overflow: hidden;
      /* Menghilangkan scroll */
    }

    .container {
      padding-top: 150px;
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
      <div class="col-md-6">
        <div class="card text-center p-5">
          <h1 class="card-title">Selamat Datang di Raju<span style="color: orange;">Tin</span></h1>
          <p class="card-text">Selamat datang di website RajuTin Kami menyediakan berbagai macam benang rajut dan pola rajutan.</p>
          <button id="popupButton" class="btn btn-primary btn-lg">Explore Now</button>
          <!-- Popup -->
          <div id="popup" class="popup" style="display:none;">
            <div class="text-center">
              <div class="spinner"></div>
              <h6 class="mt-4">Please wait for a moment while we take you to the homepage</h6>

            </div>
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
        window.location.href = "../home/";
      }, 3000); // Mengarahkan ke halaman beranda dalam 3 detik
    });
  </script>
</body>

</html>