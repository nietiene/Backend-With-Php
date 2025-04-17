<?php
include("Create.php");

if (isset($_POST['Add'])) {
    
    $Name = $_POST['name'];
    $sql = "INSERT INTO task(i, action) VALUES(NULL, '$Name')";
    $query = mysqli_query($conn, $sql);

    if ($query == true) {
        
        header("location:./Create.php");
    }
    else {
        echo "DATA NOT INSETED: ". mysqli_connect_error();
    }
}


?>