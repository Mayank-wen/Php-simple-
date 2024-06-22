<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task = $conn->real_escape_string($_POST["task"]);

    if (!empty($task)) {
        $conn->query("INSERT INTO tasks (task) VALUES ('$task')");
    }
}

$conn->close();
header("Location: index.php");
exit();
?>
