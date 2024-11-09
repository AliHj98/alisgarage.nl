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
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(../img/320/320.1.jpeg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Product Details</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Products</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">BMW E46 320 M52TUB</li>
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
                    <img id="main-image" src="../img/320/320.1.jpeg" alt="BMW E46 320 M52TUB" class="img-fluid">
                </div>

                <!-- Image Slider for Additional Images -->
                <div class="product-image-slider owl-carousel owl-theme">
                    <!-- Image 1 to 30 -->
                    <?php
                    for ($i = 1; $i <= 20; $i++) {
                        $imagePath = "../img/320/320." . $i . ".jpeg";
                        echo "<img src=\"$imagePath\" alt=\"Image $i\" class=\"img-fluid slider-image\">";
                    }
                    ?>
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-lg-6">
                <h2 class="product-title">BMW E46 320 M52TUB</h2>
                <p class="product-price fw-bold">6000€</p>

                <p class="product-description">
                    The **BMW E46 320 M52TUB** is a refined luxury sedan that combines sporty dynamics with everyday usability. 
                    Powered by the 2.2L M52TUB inline-six engine, it delivers smooth power and impressive performance, ideal for 
                    both city driving and open highways. With its timeless BMW design, comfortable ride, and top-tier interior, 
                    the E46 320 M52TUB stands out as a perfect blend of performance, luxury, and reliability.
                </p>

                <h5>Specifications</h5>
                <ul class="product-specifications">
                    <li><strong>Engine:</strong> 2.2L M52TUB Inline-6</li>
                    <li><strong>Power:</strong> 170 HP at 5,500 RPM</li>
                    <li><strong>Transmission:</strong> 5-speed manual</li>
                    <li><strong>Fuel Efficiency:</strong> 9.0 L/100km combined</li>
                    <li><strong>Top Speed:</strong> 230 km/h</li>
                    <li><strong>Seats:</strong> 5</li>
                    <li><strong>Weight:</strong> 1500 kg</li>
                    <li><strong>Color Options:</strong> Silver, Black, Blue</li>
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
