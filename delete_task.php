<?php
// delete_task.php
$conn = new mysqli("localhost", "root", "", "project");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $taskId = $_POST['task_id'];

    // Delete the task by ID
    $sql = "DELETE FROM tasks WHERE id = '$taskId'";
    
    if ($conn->query($sql) === TRUE) {
        echo "success"; // This is what the JavaScript looks for
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
?>