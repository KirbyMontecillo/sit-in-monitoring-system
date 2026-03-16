<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/style.css">
    <title>Login — UC Sit-In Monitor</title>
</head>
<body>

<!-- Navbar -->
<nav class="uc-nav">
    <div class="uc-nav-brand">
        <img src="static/images/uc_logo.png" alt="UC Logo">
        College of Computer Studies Sit-in Monitoring System
    </div>
    <div class="uc-nav-links">
        <a href="#">Home</a>
        <div class="uc-dropdown">
            <a href="#">Community</a>
            <div class="uc-dropdown-menu">
                <a href="#">None</a>
                <a href="#">TBA</a>
            </div>
        </div>
        <a href="#">About</a>
        <a href="login.php" class="active">Login</a>
        <a href="register.php">Register</a>
    </div>
</nav>

<!-- Main -->
<div class="auth-page">
    <div class="wrap">

        <div class="header">
            <img src="static/images/ccs_logo.png" alt="CCS Logo" class="ccs-logo-top">
            <h2>Welcome back</h2>
            <p>University of Cebu — Sit-In Monitoring System</p>
        </div>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger py-2 mb-3"><?= $_SESSION['error']; unset($_SESSION['error']); ?></div>
        <?php endif; ?>
        <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success py-2 mb-3"><?= $_SESSION['success']; unset($_SESSION['success']); ?></div>
        <?php endif; ?>

        <div class="form-card">
            <form action="process/process_login.php" method="POST">

                <div class="field">
                    <label>ID Number</label>
                    <input type="text" name="student_id" placeholder="e.g. 2024-0001" required>
                </div>

                <div class="field">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="••••••••" required>
                </div>

                <div class="row-check">
                    <label>
                        <input type="checkbox" name="remember"> Remember me
                    </label>
                    <a href="#">Forgot password?</a>
                </div>

                <button type="submit" class="btn-login">Sign in</button>
                <p class="footer-link">No account yet? <a href="register.php">Register</a></p>

            </form>
        </div>

    </div>
</div>

<script src="static/js/bootstrap.bundle.min.js"></script>
</body>
</html>