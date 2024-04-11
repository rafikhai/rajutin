<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>RajuTin - Pakaian</title>
    <link rel="icon" type="img/png" href="assets/img/logoweb.png" />
    <!-- Core theme CSS-->
    <link href="../../css/style.css" rel="stylesheet" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- Animated CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--font google poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap">

</head>

<body>
    <!-- nav section start -->
    <section class="header-section">
        <nav class="navbar sticky-top navbar-expand-lg navbar-light fixed-top">
            <div class="container-fluid justify-content-center">
                <a class="navbar-brand" href="../../" style="font-weight: bold;">
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
                                <a class="nav-link active" aria-current="page" href="../../home/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="../../home#about-section">About</a>
                            </li>
                            <li class="nav-item dropdown AC">
                                <a class="nav-link active dropdown-toggle" href="#product-section" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Products
                                </a>
                                <ul class="dropdown-menu" href="#product-section" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../tas/">Tas</a></li>
                                    <li><a class="dropdown-item" href="../pakaian/">Pakaian</a></li>
                                    <!-- <li><hr class="dropdown-divider"></li> -->
                                    <li><a class="dropdown-item" href="../hiasan/">Hiasan</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="../../home#contact-section">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="../../gallery/">Gallery</a>
                            </li>
                        </ul>
                    </div>
                </div>
        </nav>
    </section>
    <!-- end of nav section -->



    <!-- Products Section Start -->
    <section id="product-section" class=" py-5">
        <div class="container" id="product-list-1">
            <div class="row">
                <div class="col  text-center bg-dark text-white">
                    <h2 class="display-4 mb-2">Our <span style="color: orange;">Products</span></h2>
                </div>
            </div>
            <!-- divider start -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mt-5">
                    <li class="breadcrumb-item"><a href="../../home">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                </ol>
            </nav>
            <!-- end of divider -->
        </div>

        <?php
// Include database connection
include '../../admin/koneksi.php';

// Query to fetch products from the database
$sql = mysqli_query($koneksi, "SELECT * FROM product");

// Check if query was successful
if ($sql) {
    // Open the container div
    echo '<div class="container">';
    
    // Initialize a counter to keep track of the number of cards in a row
    $counter = 0;
    
    // Open the row div
    echo '<div class="row mt-5">';
    
    // Loop through each row in the result set
    while ($row = mysqli_fetch_array($sql)) {
        $id_product = $row[0];
        $nama_product = $row[1];
        $stok_product = $row[2];
        $kategori_product = $row[3];
        $keterangan_product = $row[4];
        $gambar_product = $row[5];

        // Open a new row if counter is divisible by 3
        if ($counter % 3 == 0 && $counter != 0) {
            // Close the previous row
            echo '</div>';
            
            // Open a new row
            echo '<div class="row mt-5">';
        }
?>
        <div class="col-lg-4 mb-4">
            <form action="../detail-product/" method="post">
                <input type="hidden" name="id_product" value="<?= $id_product ?>">
                <button type="submit" class="btn btn-link" style="color: black; text-decoration: none;">
                    <div class="card h-100">
                        <img src="../../uploads/<?= $gambar_product ?>" class="card-img-top" alt="<?= $nama_product ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $nama_product ?></h5>
                            <p class="card-text"><?= $keterangan_product ?></p>
                        </div>
                    </div>
                </button>
            </form>
        </div>



        <?php
        // Increment the counter
        $counter++;
    }
    
    // Close the row div
    echo '</div>';
    
    // Close the container div
    echo '</div>';
} else {
    // Query failed, handle the error
    echo "Error: " . mysqli_error($koneksi);
}

// Close database connection
mysqli_close($koneksi);
?>
        <div class="row">
            <!-- Add category buttons -->
            <!-- <div class="col text-center">
            <div class="btn-group" role="group" aria-label="Category Buttons">
              <button type="button" class="btn btn-secondary">Tas</button>
              <button type="button" class="btn btn-secondary">Pakaian</button>
              <button type="button" class="btn btn-secondary">Hiasan</button>
            </div>
          </div> -->
            <div class="col text-center">
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <button type="button" class="btn btn-orange" id="btn1">1</button>
                    <button type="button" class="btn btn-orange" id="btn2">2</button>
                    <button type="button" class="btn btn-orange" id="btn3">3</button>
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-orange dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <li><a class="dropdown-item" href="#">Tas</a></li>
                            <li><a class="dropdown-item" href="#">Pakaian</a></li>
                            <li><a class="dropdown-item" href="#">Hiasan</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- End Product Section -->


    <?php
    include "../../layout/footer.html";
    ?>






    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- Core theme JS-->
    <script src="../../js/scripts.js"></script>
    <!-- Tambahkan tag link untuk animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</body>

</html>