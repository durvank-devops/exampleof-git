<?php
session_start();
include "db.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM managers WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {

    $_SESSION['manager'] = $username;

    // Redirect to homepage
    header("Location: homepage.html?role=manager");
    exit();

} else {
    echo "<script>alert('Invalid Login'); window.location='manager-login.html';</script>";
}
?>
