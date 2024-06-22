<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>To-Do List</h1>

    <form action="add_task.php" method="post">
        <input type="text" name="task" placeholder="Enter a new task" required>
        <button type="submit">Add Task</button>
    </form>

    <h2>Tasks</h2>
    <ul>
        <?php
        $result = $conn->query("SELECT id, task FROM tasks");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li>" . htmlspecialchars($row["task"]) . 
                     " <a href='delete_task.php?id=" . $row["id"] . "'>Delete</a></li>";
            }
        } else {
            echo "No tasks found.";
        }
        $conn->close();
        ?>
    </ul>
</body>
</html>
