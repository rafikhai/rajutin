<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Tas Rajut - Gallery</title>
    <link rel="icon" type="img/png" href="../assets/img/logoweb.png" />

    <!-- Core theme CSS-->
    <link href="../css/style.css" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Animated CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>
    <?php
  include "../layout/header.html";
  ?>

    <!-- carousel section start -->
    <section class="carousel">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active element animate__animated animate__backInUp">
                    <div class="carousel-overlay"></div>
                    <!-- <video class="d-block" autoplay muted loop style="width: 100%; max-height: 400px; object-fit: fill;">
                      <source src="../assets/video/Crochet For Beginners 😇 New perfect desing crochet! Super easy very beautiful crochet headband...mp4" type="video/mp4">
                      Your browser does not support the video tag.
                    </video> -->
                    <img src="../assets/img/slide 01.jpg" class="d-block w-100" alt="carousel-2" height="400px" />

                    <div class="carousel-caption d-none d-md-block">
                        <h5><i>Raju<span>Tin</span></i></h5>
                        <p>
                            "Crafted with Care, Woven with Passion: Discover the Artistry of Handmade Knits with
                            Raju<span>Tin</span>"
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
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- end of carousel section -->



    <!-- gallery section start -->
    <section id="gallery-section" class="py-5">
        <div class="container">
            <div class="row">
                <!-- <div class="col  text-center text-white bg-dark">
            <h1 class="display-4 mb-5 mt-5">Our <span style="color: orange;">Gallery</span></h1>
          </div> -->
                <div class="col text-center text-white bg-dark">
                    <h1 class="display-4 mb-5 mt-5"><span id="typing-text"></span></h1>
                </div>
            </div>
            <div class="row mt-5 bg-light">
                <!-- Produk 1 -->

                <div class="col-lg-4 mt-3 mb-3">
                    <img src="../assets/img/produk1.webp" class="img-fluid rounded-circle" alt="produk1"
                        style="max-width: auto; height: 300px" />
                </div>
                <div class="col-lg-8 mb-3">
                    <h2 class="display-6 mb-4">Display <span>Satu</span></h2>
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
                <!-- Produk 2 -->

                <div class="col-lg-8 mb-3 text-end">
                    <h2 class="display-6 mb-4">Display <span>Dua</span></h2>
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
                <div class="col-lg-4 mb-3">
                    <img src="../assets/img/produk2.jpeg" class="img-fluid rounded-circle" alt="produk1"
                        style="max-width: auto; height: 300px" />
                </div>
                <!-- Produk 3 -->
                <div class="col-lg-4 mb-3">
                    <img src="../assets/img/produk3.jpg" class="img-fluid rounded-circle" alt="produk1"
                        style="max-width: auto; height: 300px" />
                </div>
                <div class="col-lg-8 mb-3">
                    <h2 class="display-6 mb-4">Display <span>Tiga</span></h2>
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
                <!-- Produk 4 -->

                <div class="col-lg-8 mb-3 text-end">
                    <h2 class="display-6 mb-4">Display <span>Empat</span></h2>
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
                <div class="col-lg-4 mb-3">
                    <img src="../assets/img/produk1.webp" class="img-fluid rounded-circle" alt="produk1"
                        style="max-width: auto; height: 300px" />
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery Section -->



    <?php
  include "../layout/footer.html";
  ?>




    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Core theme JS-->
    <script src="../js/scripts.js"></script>

    <!-- Tambahkan tag link untuk animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</body>

</html>