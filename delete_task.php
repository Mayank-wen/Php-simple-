<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $conn->query("DELETE FROM tasks WHERE id=$id");
}

$conn->close();
header("Location: index.php");
exit();
?>
