80% of storage used … If you run out, you can't create, edit, and upload files. Get 30 GB for ₱10 for 3 months ₱49.
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/style.css">
    <title>Sit-In Monitoring System</title>
</head>
<body>

<div class="container mt-3">

    <!-- back button -->
    <a href="login.php" class="btn btn-danger btn-sm mb-3">Back</a>

    <div class="row align-items-center justify-content-center">

        <div class="col-md-5">
            <h3 class="text-center mb-4">Sign up</h3>

            <!-- err / success msgs -->
            <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-danger"><?= $_SESSION['error']; unset($_SESSION['error']); ?></div>
            <?php endif; ?>

            <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success"><?= $_SESSION['success']; unset($_SESSION['success']); ?></div>
            <?php endif; ?>

            <!-- registration form -->
            <form action="process/process_register.php" method="POST">

                <div class="mb-3">
                    <input type="text" name="student_id" class="form-control" placeholder="" required>
                    <label>ID Number</label>
                </div>

                <div class="mb-3">
                    <input type="text" name="last_name" class="form-control" placeholder="" required>
                    <label>Last Name</label>
                </div>

                <div class="mb-3">
                    <input type="text" name="first_name" class="form-control" placeholder="" required>
                    <label>First Name</label>
                </div>

                <div class="mb-3">
                    <input type="text" name="middle_name" class="form-control" placeholder="">
                    <label>Middle Name</label>
                </div>

                <div class="mb-3">
                    <select name="course" class="form-select" required>
                        <option value="" disabled selected>Select a Course</option>
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
                    <label>Course</label>
                </div>

                <div class="mb-3">
                    <input type="number" name="course_level" class="form-control" value="1" min="1" max="5" required>
                    <label>Course Level</label>
                </div>

                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="" required>
                    <label>Password</label>
                </div>

                <div class="mb-3">
                    <input type="password" name="confirm_password" class="form-control" placeholder="" required>
                    <label>Repeat your password</label>
                </div>

                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="" required>
                    <label>Email</label>
                </div>

                <div class="mb-3">
                    <input type="text" name="address" class="form-control" placeholder="">
                    <label>Address</label>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-4">Register</button>
                </div>

            </form>
        </div>

        <!-- icon -->
        <div class="col-md-5 text-center d-none d-md-block">
            <img src="static/images/register_icon.png" alt="Register Illustration" class="img-fluid">
        </div>

    </div>
</div>

<script src="static/js/bootstrap.bundle.min.js"></script>
</body>
</html>