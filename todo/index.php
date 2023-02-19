<?php 
    include "config.php";
    if($_COOKIE['login']){
        header("Location: dashboard/");
    }
    else{
        header("Location: login/");
    }
?>