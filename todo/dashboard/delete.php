<?php
    require '../config.php';
    $id=$_GET['id'];

    $query="DELETE FROM todos WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
    if(!$query_run){
        echo mysqli_error($conn);
    }
    else{
        header("Location: ../dashboard");
    }
?>