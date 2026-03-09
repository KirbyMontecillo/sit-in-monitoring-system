<?php
session_start();

require_once '../db/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: ../login.php");
    exit();
}

$student_id = trim($_POST['student_id']);
$password   = $_POST['password'];

if (empty($student_id) || empty($password)) {
    $_SESSION['error'] = "Please fill in all fields.";
    header("Location: ../login.php");
    exit();
}

$stmt = $pdo->prepare("SELECT * FROM students WHERE student_id = ?");
$stmt->execute([$student_id]);
$student = $stmt->fetch();

if (!$student) {
    $_SESSION['error'] = "Student ID not found.";
    header("Location: ../login.php");
    exit();
}

if (!password_verify($password, $student['password'])) {
    $_SESSION['error'] = "Incorrect password.";
    header("Location: ../login.php");
    exit();
}

$_SESSION['student_id']  = $student['student_id'];
$_SESSION['first_name']  = $student['first_name'];
$_SESSION['last_name']   = $student['last_name'];
$_SESSION['course']      = $student['course'];

header("Location: ../dashboard.php");
exit();
?>