<?php
if (isset($_POST['Edit'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'my_task');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get form data
    $id = $_POST['i'];
    $action = $_POST['action'];

    // Update the task
    $sql = "UPDATE task SET action = '$action' WHERE i = '$id'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        // Redirect to main page after successful update
        header("Location: Create.php");
        exit();
    } else {
        echo "Update failed: " . mysqli_error($conn);
    }
}
?>
