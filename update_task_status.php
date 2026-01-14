<?php
// update_task_status.php
$conn = new mysqli("localhost", "root", "", "project");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $taskId = $_POST['task_id'];
    $newStatus = $_POST['status'];

    // Update the status for the specific task
    $sql = "UPDATE tasks SET status = '$newStatus' WHERE id = '$taskId'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Status updated successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
?>