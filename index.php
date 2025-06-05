<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Guitar House</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <?php include('includes/header.php'); ?>

    <!-- Hero Section -->
    <section class="hero text-center d-flex align-items-center justify-content-center">
        <div>
            <h1 class="display-4">Welcome to Guitar House Online Store</h1>
            <p class="lead">Shop premium guitars and accessories</p>
            <a href="shop.php" class="btn btn-primary mt-3">Shop Now</a>
        </div>
    </section>

    <!-- Features -->
    <section class="container py-5">
        <div class="row text-center">
            <div class="col-md-4">
                <h4>Quality Guitars</h4>
                <p>Only the best brands and models.</p>
            </div>
            <div class="col-md-4">
                <h4>Fast Shipping</h4>
                <p>Island-wide delivery within 3 days.</p>
            </div>
            <div class="col-md-4">
                <h4>Customer Support</h4>
                <p>Friendly support team available 24/7.</p>
            </div>
        </div>
    </section>

    <?php include('includes/footer.php'); ?>

    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>