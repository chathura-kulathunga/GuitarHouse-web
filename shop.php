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

    <!-- Search & Filter Section with Light Background -->
    <section style="background-color: #2f2f2f;" class="text-light py-4">
        <div class="container">
            <div class="row gy-3 align-items-center justify-content-between">
                
                <!-- Category Dropdown (Left) -->
                <div class="col-md-3 text-md-start text-center">
                    <select class="form-select bg-dark text-light border-light" onchange="location = this.value;">
                        <option selected disabled>Choose Category</option>
                        <option value="electric.php">Electric</option>
                        <option value="acoustic.php">Acoustic</option>
                        <option value="bass.php">Bass</option>
                        <option value="classical.php">Classical</option>
                    </select>
                </div>

                <!-- Search Bar (Center) -->
                <div class="col-md-5">
                    <form class="d-flex justify-content-center" method="GET" action="search.php">
                        <input type="text" name="query" class="form-control me-2" placeholder="Search guitars..."
                            style="background-color: #3a3a3a; color: #fff; border: 1px solid #6c757d;">
                        <button type="submit" class="btn btn-outline-light">Search</button>
                    </form>
                </div>

                <!-- Navigation Buttons (Right) -->
                <div class="col-md-4 text-md-end text-center">
                    <a href="about.php" class="btn btn-outline-light me-2">About Us</a>
                    <a href="brands.php" class="btn btn-outline-light">Brands</a>
                </div>

            </div>
        </div>
    </section>

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
                            <span style="color: gold;">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                        </div>
                        <div class="mt-auto">
                            <p class="price">$2,499.00</p>
                            <div class="icon-group">
                                <button class="icon-btn"><i class="bi bi-cart"></i></button>
                                <button class="icon-btn"><i class="bi bi-heart"></i></button>
                                <!-- Eye icon opens the modal -->
                                <button class="icon-btn" data-bs-toggle="modal" data-bs-target="#productModal1">
                                    <i class="bi bi-eye"></i>
                                </button>
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

    <!-- Product Details Modal -->
    <div class="modal fade" id="productModal1" tabindex="-1" aria-labelledby="productModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModal1Label">Fender Stratocaster Electric Guitar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body d-flex flex-wrap">
                    <!-- Image Switcher -->
                    <div class="col-md-6 text-center mb-3 pe-3">
                        <div class="image-switcher">
                            <!-- Main Display Image -->
                            <img id="mainImage1" src="assets/images/shop/guitar1.jpg" alt="Main Guitar" class="main-img img-fluid rounded">

                            <!-- Thumbnails -->
                            <div class="thumbs d-flex justify-content-center mt-3 gap-2">
                                <img src="assets/images/shop/guitar1.jpg" class="thumb-img rounded" onclick="switchImage('mainImage1', 'assets/images/shop/guitar1.jpg')">
                                <img src="assets/images/shop/guitar2.jpg" class="thumb-img rounded" onclick="switchImage('mainImage1', 'assets/images/shop/guitar2.jpg')">
                                <img src="assets/images/shop/guitar3.jpg" class="thumb-img rounded" onclick="switchImage('mainImage1', 'assets/images/shop/guitar3.jpg')">
                            </div>
                        </div>
                    </div>

                    <!-- Product Info -->
                    <div class="col-md-6">
                        <p><strong>Description:</strong> Fender 70th Anniversary Ultra Stratocaster HSS Electric Guitar.</p>
                        <p><strong>Price:</strong> $2,499.00</p>
                        <p><strong>Stock:</strong> In Stock</p>
                        <p><strong>Product Code:</strong> GTR-FND-70TH-STRAT</p>
                        <p><strong>Available Quantity:</strong> 8</p>
                        <div class="mb-3">
                            <label class="form-label"><strong>Qty:</strong></label>
                            <div class="input-group" style="width: 140px;">
                                <button class="btn btn-outline-secondary" type="button" onclick="changeQty(-1, 1)">−</button>
                                <input type="text" id="quantityInput1" class="form-control text-center" value="1">
                                <button class="btn btn-outline-secondary" type="button" onclick="changeQty(1, 1)">+</button>
                            </div>
                            <div id="quantityError1" class="text-danger mt-1" style="display:none;">Enter whole number between 1 and 8.</div>
                        </div>
                        <div class="d-flex gap-2 mt-3">
                            <button class="btn btn-outline-primary w-100" onclick="validateQuantity(1)">Add to Cart</button>
                            <button class="btn btn-success w-100">Buy Now</button>
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
    <script src="assets/js/script.js"></script>

</body>

</html>