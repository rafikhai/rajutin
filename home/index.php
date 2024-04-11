<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Tas Rajut</title>
    <link rel="icon" type="img/png" href="assets/img/logoweb.png" />
    <!-- Core theme CSS-->
    <link href="../css/style.css" rel="stylesheet" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- Animated CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--font google poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap">

</head>


<body>
    <!-- header navbar section -->
    <?php
    include "../layout/header.html";
    ?>
    <!-- end of header navbar section -->


    <!-- carousel section start -->
    <section class="carousel">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active element animate__animated animate__backInUp">
                    <div class="carousel-overlay"></div>
                    <!-- <img src="../assets/img/slide1.jpg" class="d-block w-100" alt="carousel-1" height="400px" /> -->
                    <!-- <video class="d-block w-100" autoplay muted loop height="400px">
                    <source src="assets/video/Carousel Intro - After Effects Templates - Project Files.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                    </video> -->

                    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/GiBdofM6CoA?start=239&autoplay=1" frameborder="0" allowfullscreen></iframe> -->
                    <img src="../assets/img/slide 0.jpg" class="d-block w-100" alt="carousel-2" height="400px" />
                    <div class="carousel-caption d-none d-md-block">
                        <h5><i><span>HANDMADE LUXURY</span></i></h5>
                        <p>
                            "Wrap yourself in warmth and elegance with our exquisitely
                            handcrafted knitwear collection. Each stitch tells a story of
                            dedication and skill. Experience the artistry firsthand."
                        </p>
                    </div>
                </div>
                <div class="carousel-item element animate__animated animate__backInUp">
                    <div class="carousel-overlay"></div>
                    <img src="../assets/img/slide 2.jpg" class="d-block w-100" alt="carousel-2" height="400px" />
                    <div class="carousel-caption d-none d-md-block">
                        <h5><i><span>CRAFTED BY HAND</span></i></h5>
                        <p>
                            "Feel the difference with our meticulously crafted knitwear.
                            Made with love and attention to detail, our products are not
                            just accessories, but a reflection of your unique style and
                            personality."
                        </p>
                    </div>
                </div>
                <div class="carousel-item element animate__animated animate__backInUp">
                    <div class="carousel-overlay"></div>
                    <img src="../assets/img/slide3.png" class="d-block w-100" alt="carousel-3" height="400px" />
                    <div class="carousel-caption d-none d-md-block">
                        <h5><i><span>ARTISAN ELEGANCE</span></i></h5>
                        <p>
                            "Elevate your style with timeless pieces that blend comfort and
                            sophistication seamlessly. Our handmade knits are designed to
                            complement every occasion, from cozy evenings in to chic
                            outings."
                        </p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- end of carousel section -->

    <!-- about section start -->
    <section id="about-section" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="display-4 mb-4"><span style="color: orange;">About</span> Us</h2>
                    <p class="lead">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                        tincidunt purus ut est consectetur, in consectetur libero
                        efficitur.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                        tincidunt purus ut est consectetur, in consectetur libero
                        efficitur. Duis vehicula ex a nunc condimentum mollis. Vestibulum
                        mattis libero vitae eros malesuada dapibus. Suspendisse potenti.
                        In hac habitasse platea dictumst.
                    </p>
                </div>
                <div class="col-lg-4">
                    <img src="../assets/img/about.jpg" class="img-fluid rounded-circle" alt="About Us" style="max-width: auto; height: 300px" />
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Products Section Start -->
    <section id="product-section" class=" py-5">
        <div class="container" id="product-list-1">
            <div class="row">
                <div class="col  text-center bg-dark text-white">
                    <h2 class="display-4 mb-2">Our <span style="color: orange;">Products</span></h2>
                </div>
            </div>
        </div>

        <?php
        // Include database connection
        include '../admin/koneksi.php';

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
                    <form action="../product/detail-product/" method="post">
                        <input type="hidden" name="id_product" value="<?= $id_product ?>">
                        <button type="submit" class="btn btn-link" style="color: black; text-decoration: none;">
                            <div class="card h-100">
                                <img src="../uploads/<?= $gambar_product ?>" class="card-img-top" alt="<?= $nama_product ?>">
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
                        <button id="btnGroupDrop1" type="button" class="btn btn-orange dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
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
    include "../contact/index.html";
    ?>

    <?php
    include "../layout/footer.html";
    ?>






    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- Core theme JS-->
    <script src="../js/scripts.js"></script>
    <!-- Tambahkan tag link untuk animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</body>

</html>