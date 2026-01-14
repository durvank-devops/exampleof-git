<?php
// add_task.php
$conn = new mysqli("localhost", "root", "", "project");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect the manually typed or selected data
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $assignee = mysqli_real_escape_string($conn, $_POST['assignee']);
    $due_date=mysqli_real_escape_string($conn, $_POST['due_date']);
    $priority=mysqli_real_escape_string($conn, $_POST['priority']);

    // INSERT the new task into the table
   $sql = "INSERT INTO tasks (title, assignee, due_date, priority, status) 
        VALUES ('$title', '$assignee', '$due_date', '$priority', 'Pending')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Success"; 
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
?>