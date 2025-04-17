<?php
if (isset($_GET['Edit'])) {
    $id = $_GET['Edit'];

    $conn = mysqli_connect('localhost', 'root', '', 'my_task');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM task WHERE i = '$id'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>
    <h3>Edit Task</h3>
    <form action="test1.php" method="post">
        <input type="hidden" name="i" value="<?php echo $row['i']; ?>">
        <input type="text" name="action" value="<?php echo $row['action']; ?>" required>
        <button type="submit" name="Edit">Update</button>
    </form>
</body>
</html>
<?php
} else {
    echo "No task ID provided.";
}
?>
