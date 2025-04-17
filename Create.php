<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Fav Food</title>
</head>
<body>
    <form action="Add Food.php" method="post">
        <label for="">Name</label>
        <input type="text" name="name">
        <button name="Add">Add To Fav</button>
    </form>
    <h3>Favorite Foods</h3>
    <?php

    $conn = mysqli_connect('localhost','root','','my_task');

     $select = "SELECT * FROM task";
     $query = mysqli_query($conn, $select);
     while($rows = mysqli_fetch_assoc($query)) {

    ?>
     
<div>
   
    <span><?php echo $rows['i']?></span>
    <span><?php echo $rows['action']?></span>
    <!-- <a href="test.php?Edit=<?php //echo $rows['i']; ?>">Edit</a> -->
    <a href="Edit.php?Edit=<?php echo $rows['i']; ?>">Edit</a>
    <a href="">Delete</a>
</div>
<?php
     }
 ?>
</body>
</html>