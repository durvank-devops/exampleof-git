<?php
session_start(); // This must be at the very top
$conn = new mysqli("localhost", "root", "", "project");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM employees WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // In a real app, use password_verify(). For now, simple check:
        if ($password == $user['password']) {
            // SET SESSIONS HERE
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role']; // e.g., 'manager' or 'employee'

            // Redirect based on role
            if ($user['role'] == 'manager') {
                header("Location: dashboard.html");
            } else {
                header("Location: homepage.html");
            }
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }
}
?>