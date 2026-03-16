<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/style.css">
    <title>Register — UC Sit-In Monitor</title>
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
        <a href="login.php">Login</a>
        <a href="register.php" class="active">Register</a>
    </div>
</nav>

<!-- Main -->
<div class="auth-page auth-page--register">
    <div class="wrap">

        <div class="header">
            <div class="logo-ring">
                <img src="static/images/uc_logo.png" alt="UC Logo">
            </div>
            <h2>Student Registration</h2>
            <p>University of Cebu — Sit-In Monitoring System</p>
        </div>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger py-2 mb-3"><?= $_SESSION['error']; unset($_SESSION['error']); ?></div>
        <?php endif; ?>
        <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success py-2 mb-3"><?= $_SESSION['success']; unset($_SESSION['success']); ?></div>
        <?php endif; ?>

        <div class="form-card">

            <a href="login.php" class="btn-back">← Back to login</a>

            <form action="process/process_register.php" method="POST">

                <p class="section-label">Personal information</p>

                <div class="field">
                    <label>ID Number</label>
                    <input type="text" name="student_id" placeholder="e.g. 2024-0001" required>
                </div>

                <div class="grid2">
                    <div class="field">
                        <label>Last name</label>
                        <input type="text" name="last_name" required>
                    </div>
                    <div class="field">
                        <label>First name</label>
                        <input type="text" name="first_name" required>
                    </div>
                </div>

                <div class="field">
                    <label>Middle name</label>
                    <input type="text" name="middle_name">
                </div>

                <div class="field">
                    <label>Course</label>
                    <select name="course" required>
                        <option value="" disabled selected>Select a course</option>
                        <option value="BSIT">BS Information Technology</option>
                        <option value="BSCS">BS Computer Science</option>
                        <option value="BSCE">BS Civil Engineering</option>
                        <option value="BSEE">BS Electrical Engineering</option>
                        <option value="BSME">BS Mechanical Engineering</option>
                        <option value="BSBA">BS Business Administration</option>
                        <option value="BSED">BS Education</option>
                        <option value="BSN">BS Nursing</option>
                        <option value="BSA">BS Accountancy</option>
                    </select>
                </div>

                <div class="field">
                    <label>Year level</label>
                    <input type="number" name="course_level" value="1" min="1" max="5" required>
                </div>

                <div class="spacer"></div>
                <p class="section-label">Account credentials</p>

                <div class="field">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="you@uc.edu.ph" required>
                </div>

                <div class="grid2">
                    <div class="field">
                        <label>Password</label>
                        <input type="password" name="password" required>
                    </div>
                    <div class="field">
                        <label>Confirm password</label>
                        <input type="password" name="confirm_password" required>
                    </div>
                </div>

                <div class="field">
                    <label>Address <span style="color:#b0c4d8;font-weight:400">(optional)</span></label>
                    <input type="text" name="address" placeholder="Cebu City">
                </div>

                <button type="submit" class="btn-register">Create account</button>
                <p class="footer-link">Already registered? <a href="login.php">Sign in</a></p>

            </form>
        </div>

    </div>
</div>

<script src="static/js/bootstrap.bundle.min.js"></script>
</body>
</html>