<?php 
    include "config.php";
    if($_SESSION['login']){
        header("Location: dashboard/");
    }
    else{
        header("Location: login/");
    }
?>