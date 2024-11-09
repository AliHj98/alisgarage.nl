<!DOCTYPE html>
<html lang="en">

<?php require_once('../reuse/head.php'); ?>

<body>
    <!-- Spinner Start -->
    <?php require_once('../reuse/spinner.php'); ?>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <?php require_once('../reuse/topbar.php'); ?>
    <!-- Topbar End -->

    <!-- Navigation -->
    <?php require_once('../reuse/nav.php'); ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(../img/alfa2/alfa2.1.jpeg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Product Details</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Products</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Alfa Romeo 159 1.9 JTDm</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Product Details Start -->
    <div class="container py-5">
        <div class="row">
            <!-- Product Image and Slider -->
            <div class="col-lg-6">
                <!-- Large Main Image -->
                <div class="product-main-image mb-4">
                    <img id="main-image" src="../img/alfa2/alfa2.1.jpeg" alt="Alfa Romeo 159 1.9 JTDm" class="img-fluid">
                </div>

                <!-- Image Slider for Additional Images -->
                <div class="product-image-slider owl-carousel owl-theme">
                    <img src="../img/alfa2/alfa2.2.jpeg" alt="Image 1" class="img-fluid slider-image">
                    <img src="../img/alfa2/alfa2.3.jpeg" alt="Image 2" class="img-fluid slider-image">
                    <img src="../img/alfa2/alfa2.4.jpeg" alt="Image 3" class="img-fluid slider-image">
                    <img src="../img/alfa2/alfa2.5.jpeg" alt="Image 4" class="img-fluid slider-image">
                    <img src="../img/alfa2/alfa2.6.jpeg" alt="Image 5" class="img-fluid slider-image">
                    <img src="../img/alfa2/alfa2.7.jpeg" alt="Image 6" class="img-fluid slider-image">
                    <img src="../img/alfa2/alfa2.8.jpeg" alt="Image 7" class="img-fluid slider-image">
                    <img src="../img/alfa2/alfa2.9.jpeg" alt="Image 8" class="img-fluid slider-image">
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-lg-6">
                <h2 class="product-title">Alfa Romeo 159 1.9 JTDm</h2>
                <p class="product-price fw-bold">7000€</p>

                <p class="product-description">
                    The **Alfa Romeo 159 1.9 JTDm** is a compact executive car that combines Italian style with impressive 
                    performance. Powered by the 1.9-liter JTDm diesel engine, it offers excellent fuel efficiency and robust 
                    power delivery, making it ideal for both urban and long-distance driving. The 159 features a sophisticated 
                    and sporty design with a refined interior, ensuring comfort and elegance on every journey. With its agile handling
                    and distinctive looks, the Alfa Romeo 159 1.9 JTDm is a true driver's car.
                </p>

                <h5>Specifications</h5>
                <ul class="product-specifications">
                    <li><strong>Engine:</strong> 1.9L JTDm Inline-4 Diesel</li>
                    <li><strong>Power:</strong> 150 HP at 4,000 RPM</li>
                    <li><strong>Transmission:</strong> 6-speed manual</li>
                    <li><strong>Fuel Efficiency:</strong> 5.5 L/100km combined</li>
                    <li><strong>Top Speed:</strong> 215 km/h</li>
                    <li><strong>Seats:</strong> 5</li>
                    <li><strong>Weight:</strong> 1450 kg</li>
                    <li><strong>Color Options:</strong> Red, Black, Silver</li>
                </ul>

                <!-- Buy/Reserve Button -->
                <a href="#" class="btn btn-primary btn-lg">Buy or Reserve Now</a>
            </div>
        </div>
    </div>
    <!-- Product Details End -->

    <!-- Footer Start -->
    <?php require_once('../reuse/footer.php'); ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/wowjs@1.1.3/dist/wow.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>

    <!-- Initialize the Image Slider and Main Image Click Function -->
    <script>
        $(document).ready(function(){
            $(".product-image-slider").owlCarousel({
                items: 3,
                loop: true,
                margin: 10,
                nav: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 3000,
                responsive: {
                    0: { items: 1 },
                    600: { items: 2 },
                    1000: { items: 3 }
                }
            });

            // Click event for changing the main image when a slider image is clicked
            $(".product-image-slider .slider-image").click(function(){
                var newSrc = $(this).attr("src");
                $("#main-image").attr("src", newSrc);
            });
        });
    </script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>
