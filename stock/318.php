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
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(../img/318/318.1.jpeg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Product Details</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Products</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">BMW E46 N42B20 2003</li>
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
                    <img id="main-image" src="../img/318/318.6.jpeg" alt="BMW E46 N42B20 2003" class="img-fluid">
                </div>

                <!-- Image Slider for Additional Images -->
                <div class="product-image-slider owl-carousel owl-theme">
                    <img src="../img/318/318.1.jpeg" alt="Image 1" class="img-fluid slider-image">
                    <img src="../img/318/318.2.jpeg" alt="Image 2" class="img-fluid slider-image">
                    <img src="../img/318/318.3.jpeg" alt="Image 3" class="img-fluid slider-image">
                    <img src="../img/318/318.4.jpeg" alt="Image 4" class="img-fluid slider-image">
                    <img src="../img/318/318.5.jpeg" alt="Image 5" class="img-fluid slider-image">
                    <img src="../img/318/318.6.jpeg" alt="Image 6" class="img-fluid slider-image">
                    <img src="../img/318/318.7.jpeg" alt="Image 7" class="img-fluid slider-image">
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-lg-6">
                <h2 class="product-title">BMW E46 N42B20 2003</h2>
                <p class="product-price fw-bold">7,500€</p>

                <p class="product-description">
                    The **BMW E46 N42B20 2003** is a classic luxury compact sedan offering exceptional performance, advanced technology, and premium features. 
                    Powered by a 2.0L inline-4 engine (N42B20), this vehicle provides an impressive 143 horsepower and smooth acceleration, delivering a driving experience that's both dynamic and comfortable.
                    Renowned for its sporty handling, high-quality interior materials, and build quality, the E46 is a symbol of BMW engineering excellence. 
                    Whether you're cruising through the city or on a long highway trip, the BMW E46 offers a refined and stylish ride.
                </p>

                <h5>Specifications</h5>
                <ul class="product-specifications">
                    <li><strong>Engine:</strong> 2.0L Inline-4 N42B20</li>
                    <li><strong>Power:</strong> 143 HP at 6,000 RPM</li>
                    <li><strong>Transmission:</strong> 5-speed manual or 6-speed automatic</li>
                    <li><strong>Fuel Efficiency:</strong> 8.0 L/100 km combined</li>
                    <li><strong>Top Speed:</strong> 215 km/h</li>
                    <li><strong>Acceleration (0-100 km/h):</strong> 9.1 seconds</li>
                    <li><strong>Weight:</strong> 1,400 kg</li>
                    <li><strong>Color Options:</strong> Silver, Black, Blue, White</li>
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
