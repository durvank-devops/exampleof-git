<?php
session_start();
include "db.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM employees WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $_SESSION['employee'] = $username;
    header("Location: homepage.html?role=employee1");
    exit();
} else {
    echo "<script>alert('Invalid Login'); window.location='employeelogin.html';</script>";
}
?>
