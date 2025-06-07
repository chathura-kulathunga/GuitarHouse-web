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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

    <!-- Parallax_1 -->
    <div class="parallax text-center py-5 px-3">
        <h2 class="parallax-title">The Heartbeat of Music: Guitars That Shaped the World</h2>
        <p class="parallax-text">
            Guitars are the soul of music, powering genres from
            blues and jazz to rock and metal. <br /> The three main
            types are acoustic, electric, and bass guitars—each with
            its own unique sound and style. <br />Acoustic guitars deliver
            warm, natural tones perfect for unplugged sessions.
            <br />Electric guitars bring powerful, dynamic sounds that
            shaped rock history. <br />Bass guitars provide the deep groove
            that drives every band. <br /><br />Legendary bands like The Beatles,
            Jimi Hendrix, Metallica, and Linkin Park have all made
            guitars an icon of musical expression. <br /><br />Whether you’re a
            beginner or a pro, every guitar has a story waiting
            to be played.
        </p>
    </div>

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

    <!-- Parallax_2 -->
    <div class="parallax2 text-center text-white">
        <div class="container py-5">
            <h2 class="mb-4">Contact GuitarHouse - Rideegama</h2>
            <div class="row justify-content-center mb-4">
                <div class="col-md-6 text-start">
                    <p><i class="fas fa-map-marker-alt me-2 icon-style"></i><strong>GuitarHouse</strong>, Rideegama - Kurunegala</p>
                    <p><i class="fas fa-phone-alt me-2 icon-style"></i>076 123 4567</p>
                    <p><i class="fas fa-envelope me-2 icon-style"></i>guitarhouserideegama@gmail.com</p>
                    <p><i class="fab fa-facebook me-2 icon-style"></i>Guitar House - Rideegama</p>
                    <p><i class="fab fa-instagram me-2 icon-style"></i>guitar house rideegama</p>
                    <p><i class="fab fa-youtube me-2 icon-style"></i>guitar house rideegama</p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="ratio ratio-16x9">
                        <iframe
                            src="https://www.google.com/maps?q=Rideegama+Kurunegala&output=embed"
                            allowfullscreen
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
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