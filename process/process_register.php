<?php
session_start();

require_once '../db/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: ../register.php");
    exit();
}

$student_id      = trim($_POST['student_id']);
$last_name       = trim($_POST['last_name']);
$first_name      = trim($_POST['first_name']);
$middle_name     = trim($_POST['middle_name']);
$course_level    = trim($_POST['course_level']);
$password        = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$email           = trim($_POST['email']);
$course          = trim($_POST['course']);
$address         = trim($_POST['address']);

if (empty($student_id) || empty($last_name) || empty($first_name) || empty($password) || empty($email)) {
    $_SESSION['error'] = "Please fill in all required fields.";
    header("Location: ../register.php");
    exit();
}

if ($password !== $confirm_password) {
    $_SESSION['error'] = "Passwords do not match.";
    header("Location: ../register.php");
    exit();
}

if (strlen($password) < 6) {
    $_SESSION['error'] = "Password must be at least 6 characters.";
    header("Location: ../register.php");
    exit();
}

$stmt = $pdo->prepare("SELECT id FROM students WHERE student_id = ? OR email = ?");
$stmt->execute([$student_id, $email]);
$existing = $stmt->fetch();

if ($existing) {
    $_SESSION['error'] = "Student ID or Email already exists.";
    header("Location: ../register.php");
    exit();
}

$hashed_password = password_hash($password, PASSWORD_BCRYPT);

$stmt = $pdo->prepare("INSERT INTO students 
    (student_id, last_name, first_name, middle_name, course, course_level, email, address, password) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->execute([
    $student_id,
    $last_name,
    $first_name,
    $middle_name,
    $course,
    $course_level,
    $email,
    $address,
    $hashed_password
]);

$_SESSION['success'] = "Registration successful! You can now login.";
header("Location: ../login.php");
exit();
?>