<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Shop - GuitarShop</title>
    <link rel="icon" href="assets/images/home/logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/shop-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

    <?php include('includes/header.php'); ?>

    <div class="container py-5">
        <h2 class="mb-4 text-center">Our Guitars</h2>
        <div class="row g-4">

            <!-- Product Card 1 -->
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="custom-card h-100 d-flex flex-column">
                    <div class="product-img">
                        <img src="assets/images/shop/guitar1.jpg" alt="Gibson Les Paul" />
                    </div>
                    <div class="custom-card-body d-flex flex-column">
                        <h5 class="product-title">Fender Stratocaster Electric Guitar</h5>
                        <p class="product-desc">Fender 70th Anniversary Ultra Stratocaster HSS Electric Guitar.</p>
                        <div class="star-rating mb-2">
                            <span style="color: gold;">&#9733;</span>
                            <span style="color: gold;">&#9733;</span>
                            <span style="color: gold;">&#9733;</span>
                            <span style="color: gold;">&#9733;</span>
                            <span style="color: gold;">&#9733;</span>
                        </div>
                        <div class="mt-auto">
                            <p class="price">$2,499.00</p>
                            <div class="icon-group">
                                <button class="icon-btn"><i class="bi bi-cart"></i></button>
                                <button class="icon-btn"><i class="bi bi-heart"></i></button>
                                <button class="icon-btn"><i class="bi bi-eye"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="custom-card h-100 d-flex flex-column">
                    <div class="product-img">
                        <img src="assets/images/shop/guitar2.jpg" alt="Gibson Les Paul" />
                    </div>
                    <div class="custom-card-body d-flex flex-column">
                        <h5 class="product-title">Ibanez RGRT420 WK Electric Guitar</h5>
                        <p class="product-desc">High-performance guitar with speed, precision, powerful tone.</p>
                        <div class="star-rating mb-2">
                            <span style="color: gold;">&#9733;</span>
                            <span style="color: gold;">&#9733;</span>
                            <span style="color: gold;">&#9733;</span>
                            <span style="color: gold;">&#9733;</span>
                            <span style="color: gold;">&#9733;</span>
                        </div>
                        <div class="mt-auto">
                            <p class="price">$579.00</p>
                            <div class="icon-group">
                                <button class="icon-btn"><i class="bi bi-cart"></i></button>
                                <button class="icon-btn"><i class="bi bi-heart"></i></button>
                                <button class="icon-btn"><i class="bi bi-eye"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="custom-card h-100 d-flex flex-column">
                    <div class="product-img">
                        <img src="assets/images/shop/guitar3.jpg" alt="Gibson Les Paul" />
                    </div>
                    <div class="custom-card-body d-flex flex-column">
                        <h5 class="product-title">Yamaha FS800 Acoustic Guitar</h5>
                        <p class="product-desc">Yamaha FG: affordable, quality acoustic since 1966.</p>
                        <div class="star-rating mb-2">
                            <span style="color: gold;">&#9733;</span>
                            <span style="color: gold;">&#9733;</span>
                            <span style="color: gold;">&#9733;</span>
                            <span style="color: gold;">&#9733;</span>
                            <span style="color: gold;">&#9733;</span>
                        </div>
                        <div class="mt-auto">
                            <p class="price">$240.00</p>
                            <div class="icon-group">
                                <button class="icon-btn"><i class="bi bi-cart"></i></button>
                                <button class="icon-btn"><i class="bi bi-heart"></i></button>
                                <button class="icon-btn"><i class="bi bi-eye"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            

            <!-- Product Card 4 -->
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="custom-card h-100 d-flex flex-column">
                    <div class="product-img">
                        <img src="assets/images/shop/guitar4.jpg" alt="Gibson Les Paul" />
                    </div>
                    <div class="custom-card-body d-flex flex-column">
                        <h5 class="product-title">Yamaha FS800 Acoustic Guitar</h5>
                        <p class="product-desc">Yamaha FG: affordable, quality acoustic since 1966.</p>
                        <div class="star-rating mb-2">
                            <span style="color: gold;">&#9733;</span>
                            <span style="color: gold;">&#9733;</span>
                            <span style="color: gold;">&#9733;</span>
                            <span style="color: gold;">&#9733;</span>
                            <span style="color: gold;">&#9733;</span>
                        </div>
                        <div class="mt-auto">
                            <p class="price">$240.00</p>
                            <div class="icon-group">
                                <button class="icon-btn"><i class="bi bi-cart"></i></button>
                                <button class="icon-btn"><i class="bi bi-heart"></i></button>
                                <button class="icon-btn"><i class="bi bi-eye"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include('includes/footer.php'); ?>
    
    <!-- Scroll to Top Button -->
    <button onclick="scrollToTop()" id="scrollTopBtn" title="Go to top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>