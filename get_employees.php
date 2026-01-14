<?php
// get_employees.php
header('Content-Type: application/json');

// 1. Database Connection
$conn = new mysqli("localhost", "root", "", "project");

// Check connection
if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

// 2. Fetch only users with the role 'employee'
// Adjust the table and column names to match your database exactly
$sql = "SELECT * FROM employees"; 
$result = $conn->query($sql);

$employees = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $employees[] = $row;
    }
}

// 3. Return as JSON for the JavaScript to read
echo json_encode($employees);

$conn->close();
?>