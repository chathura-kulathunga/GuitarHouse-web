<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">GuitarHouse</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="shop.php">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="cart.php">Cart</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-light" style="background-color: #1f1f1f;">
                <div class="modal-header border-0">
                    <h5 class="modal-title text-warning" id="loginModalLabel">Login to GuitarHouse 🎸</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="auth/login.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control bg-dark text-light border-light" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label d-flex justify-content-between">
                                Password
                                <a href="forgot-password.php" class="text-warning small">Forgot?</a>
                            </label>
                            <input type="password" name="password" class="form-control bg-dark text-light border-light" required>
                        </div>
                        <button type="submit" class="btn btn-warning w-100">Login</button>
                    </form>

                    <div class="text-center my-3">— or —</div>

                    <a href="auth/google-login.php" class="btn btn-outline-light w-100 mb-2">
                        <i class="bi bi-google me-2"></i> Continue with Google
                    </a>

                    <p class="text-center mb-0">No account?
                        <a href="register.php" class="text-info">Create one</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>