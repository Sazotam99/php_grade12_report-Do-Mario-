<?php
    $con = mysqli_connect("localhost","root","","dummy");

    if(!$con){
        die('Connection Failed'. mysqli_connect_error());
    }
?>