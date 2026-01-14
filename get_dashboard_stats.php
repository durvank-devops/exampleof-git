<?php
// get_dashboard_stats.php
header('Content-Type: application/json');
$conn = new mysqli("localhost", "root", "", "project");

if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed"]));
}

// 1. Get counts for Tasks
$totalQuery = "SELECT COUNT(*) as total FROM tasks";
$completedQuery = "SELECT COUNT(*) as total FROM tasks WHERE status = 'Completed'";
$pendingQuery = "SELECT COUNT(*) as total FROM tasks WHERE status = 'Pending'";

// 2. Get count for Employees
$membersQuery = "SELECT COUNT(*) as total FROM employees WHERE username = 'emp1'";

$total = $conn->query($totalQuery)->fetch_assoc()['total'];
$completed = $conn->query($completedQuery)->fetch_assoc()['total'];
$pending = $conn->query($pendingQuery)->fetch_assoc()['total'];
$members = $conn->query($membersQuery)->fetch_assoc()['total'];

// 3. Output as JSON
echo json_encode([
    "totalTasks" => $total,
    "completed" => $completed,
    "pending" => $pending,
    "teamMembers" => $members
]);

$conn->close();
?>