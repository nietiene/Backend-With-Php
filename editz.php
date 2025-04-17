<?php

if (isset($_POST['Edit'])) {

    $conn = mysqli_connect('localhost', 'root', '', 'my_task');
    $Id = $_POST['i'];
    $Name = $_POST['action'];
    
    $Sql = "UPDATE task SET action = '$Name' WHERE i = '$Id'";
    $query = mysqli_query($conn, $Sql);

    if ($Sql) {
        header("location:Create.php");
        exit();
    }
    else {
        echo "ERROR OCCURED". mysqli_error($conn);
    }
}


?>