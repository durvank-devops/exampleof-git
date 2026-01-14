<?php
// get_tasks.php
session_start();
$conn = new mysqli("localhost", "root", "", "project");

// Error checking
if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed"]));
}

// Logic: Manager sees all; Employee sees only their assigned tasks
$role = isset($_SESSION['role']) ? $_SESSION['role'] : 'employee'; 
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';

if ($role === 'manager') {
    $sql = "SELECT * FROM tasks ORDER BY id DESC";
} else {
    $sql = "SELECT * FROM tasks WHERE assignee = '$username' ORDER BY id DESC";
}

$result = $conn->query($sql);
$tasks = [];

while($row = $result->fetch_assoc()) {
    $tasks[] = $row;
}

// Clear any previous output and send only JSON
header('Content-Type: application/json');
echo json_encode($tasks);
$conn->close();
?>