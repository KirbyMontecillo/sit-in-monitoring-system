<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CCS Sit-in Monitoring</title>
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/style.css">
</head>
<body>

<!-- nav bar -->
<nav class="navbar navbar-expand-lg" style="background-color: #1a3a6b;">
    <div class="container-fluid px-4">
        <a class="navbar-brand text-white fw-bold" href="#">College of Computer Studies Sit-in Monitoring System</a>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link text-white" href="#">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-white dropdown-toggle" href="#" data-bs-toggle="dropdown">Community</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">None</a></li>
                        <li><a class="dropdown-item" href="#">TBA</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link text-white" href="#">About</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="login.php">Login</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="register.php">Register</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- main content -->
<div class="container mt-5">
    <div class="row align-items-center justify-content-center" style="min-height: 70vh;">

        <!-- CCS Logo -->
        <div class="col-md-5 text-center">
            <img src="static/images/ccs_logo.png" alt="CCS Logo" class="img-fluid" style="max-width: 350px;">
        </div>

        <!-- login form -->
        <div class="col-md-5">

            <!-- err / success msgs -->
            <?php
            session_start();
            if (isset($_SESSION['error'])): ?>
                <div class="alert alert-danger"><?= $_SESSION['error']; unset($_SESSION['error']); ?></div>
            <?php endif; ?>

            <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success"><?= $_SESSION['success']; unset($_SESSION['success']); ?></div>
            <?php endif; ?>

            <form action="process/process_login.php" method="POST">

                <div class="mb-3">
                    <input type="text" name="student_id" class="form-control form-control-lg" placeholder="Enter a valid id number" required>
                    <label class="form-label mt-1">ID Number</label>
                </div>

                <div class="mb-3">
                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Enter password" required>
                    <label class="form-label mt-1">Password</label>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="form-check">
                        <input type="checkbox" name="remember" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <a href="#" class="text-decoration-none">Forgot password?</a>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Login</button>
                </div>

                <p class="text-center mt-3">
                    Don't have an account? <a href="register.php" class="text-danger fw-bold">Register</a>
                </p>

            </form>
        </div>

    </div>
</div>

<script src="static/js/bootstrap.bundle.min.js"></script>
</body>
</html>