<?php

if (isset($_GET['Edit'])) {
    $id = $_GET['Edit'];
    $conn = mysqli_connect('localhost', 'root', '', 'my_task');

 
  $sql = "SELECT * FROM task WHERE i = '$id'";
  $query = mysqli_query($conn, $sql);
  $rows = mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Edit Food</title>
</head>
<body>
    <h3>Edit Food</h3>
    <form action="editz.php" method="post">
        <input type="text" name="i" value="<?php echo $rows['i'];?>" disabled><br><br>
        <input type="text" name="action" value="<?php echo $rows['action'];?>"><br><br>
        <button type="submit" name="Edit">Save</button>
    </form>

    <?php
  } else {
    echo "No data selected";
  }
    ?>

</body>
</html>