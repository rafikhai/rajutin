<?php
session_start();

// Include database connection
include '../../admin/koneksi.php';

// Check if product ID is provided via POST
if (isset($_POST['id_product'])) {
    // Get product ID from POST data
    $id_product = $_POST['id_product'];

    // Query to fetch product details based on the provided ID
    $query = "SELECT * FROM product WHERE id_product = $id_product";
    $result = mysqli_query($koneksi, $query);

    // Check if query was successful
    if ($result) {
        // Fetch product details
        $row = mysqli_fetch_assoc($result);
        $nama_product = $row['nama_product'];
        $stok_product = $row['stok_product'];
        $kategori_product = $row['kategori_product'];
        $keterangan_product = $row['keterangan_product'];
        $gambar_product = $row['gambar_product'];

    } else {
        // Query failed, handle the error
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    // Redirect to products page if product ID is not provided
    header("Location: ../../product/");
    exit(); // Ensure script stops executing after redirection
}

// Close database connection
mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Core theme CSS-->
    <link href="../../css/style.css" rel="stylesheet" />
    <!-- Animated CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--font google poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap">

    <style>
    /* Gaya tambahan disini */
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa;
    }

    .container {
        margin-top: 4%;
        margin-bottom: 4%;
    }

    .card {
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: 0.3s;
        border-radius: 10px;
        overflow: hidden;
    }

    .card img {
        border-radius: 10px 10px 0 0;
        transition: transform 0.3s ease;
        cursor: pointer;
        /* Tambahkan kursor pointer */
    }

    .card:hover img {
        transform: scale(1.05);
    }

    .card-body {
        padding: 20px;
    }

    .btn-primary {
        background-color: #ff5722;
        border-color: #ff5722;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #ff3d00;
        border-color: #ff3d00;
    }

    .btn-primary:active {
        transform: translateY(1px);
        box-shadow: none;
    }

    h2 {
        color: #333;
        font-weight: bold;
    }

    /* Tambahkan gaya untuk modal */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.9);
    }

    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
    }

    .close {
        color: #fff;
        position: absolute;
        top: 15px;
        right: 35px;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
        cursor: pointer;
        margin-top: 4%;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    @media only screen and (max-width: 700px) {
        .modal-content {
            width: 100%;
        }
    }
    </style>
</head>

<body>
    <!-- nav section start -->
    <section class="header-section">
        <nav class="navbar sticky-top navbar-expand-lg navbar-light fixed-top">
            <div class="container-fluid justify-content-center">
                <a class="navbar-brand" href="../" style="font-weight: bold;">
                    <img class="rounded-circle" src="../../assets/img/about.jpg" alt="Logo" height="30" />
                    Raju<span>Tin</span>
                </a>
                <div class="d-flex justify-content-end">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../home/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="../home#about-section">About</a>
                            </li>
                            <li class="nav-item dropdown AC">
                                <a class="nav-link active dropdown-toggle" href="#product-section" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Products
                                </a>
                                <ul class="dropdown-menu" href="#product-section" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../product/tas/">Tas</a></li>
                                    <li><a class="dropdown-item" href="../product/pakaian/">Pakaian</a></li>
                                    <!-- <li><hr class="dropdown-divider"></li> -->
                                    <li><a class="dropdown-item" href="../product/hiasan/">Hiasan</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="../home#contact-section">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="../gallery/">Gallery</a>
                            </li>
                        </ul>
                    </div>
                </div>
        </nav>
    </section>
    <!-- end of nav section -->

    <!-- detail product section start -->

    <section class="detail-product">
        <div class="container">
            <!-- divider start -->
            <nav aria-label="breadcrumb col-ml-6">
                <ol class="breadcrumb mt-5 bg-light ">
                    <li class="breadcrumb-item"><a href="../../home">Home</a></li>
                    <li class="breadcrumb-item"><a href="../../product/product-all/">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $nama_product ?></li>

                </ol>
            </nav>
            <!-- end of divider -->

            <div class="row justify-content-center align-items-center">
                <div class="col-md-5">
                    <div class="card animate__animated animate__fadeInLeft">
                        <img src="../../uploads/<?= $gambar_product ?>" class="card-img-top" alt="<?= $nama_product ?>"
                            onclick="openModal(this);">
                    </div>
                </div>
                <div class="col-md-7">
                    <h1 class="mb-3 animate__animated animate__fadeInRight"><?= $nama_product ?></h1>
                    <p class="animate__animated animate__fadeInRight"><strong>Stock:</strong> <?= $stok_product ?></p>
                    <p class="animate__animated animate__fadeInRight"><strong>Category:</strong>
                        <?= $kategori_product ?></p>
                    <p class="animate__animated animate__fadeInRight"><strong>Description:</strong>
                        <?= $keterangan_product ?></p>
                    <button class="btn btn-primary btn-lg mt-4 animate__animated animate__fadeInUp" >Beli
                        Sekarang</button>
                    <!-- Tombol tambahkan ke keranjang belanja juga dapat ditambahkan -->
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div id="myModal" class="modal">
            <span class="close" onclick="closeModal()">&times;</span>
            <img class="modal-content" id="img01">
        </div>

        <?php 
    include "../../layout/footer.html";
    ?>

        <script>
        // Fungsi untuk membuka modal dan menampilkan gambar yang diperbesar
        function openModal(imgElement) {
            var modal = document.getElementById("myModal");
            var modalImg = document.getElementById("img01");
            modal.style.display = "block";
            modalImg.src = imgElement.src;
        }

        // Fungsi untuk menutup modal
        function closeModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
        }
        </script>
    </section>
    <!-- End of Detail Product Section -->



</body>

</html>