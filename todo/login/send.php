<?php
    require "../config.php";
    if(isset($_POST['edit'])){
        $id=$_COOKIE['uid'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $dob=$_POST['dob'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];  
        if($pass==$_COOKIE['pass']){
            $query = "UPDATE users SET fname='$fname',DOB='$dob',lname='$lname',email='$email',password='$pass' WHERE id='$id'";
            $query_run = mysqli_query($conn,$query);
            if($query_run){
                setcookie("user", $fname , time() + (86400), "/");
                setcookie("lname", $lname , time() + (86400), "/");
                setcookie("email", $email , time() + (86400), "/");
                setcookie("dob", $dob, time() + (86400), "/");
                header("Location: ../profile/");
            }
        }else{
            echo $_COOKIE['pass'];
            echo 'incorrect pw';
        }
        

    }

    if(isset($_POST['register'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $dob=$_POST['dob'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];  
        
        
        $query = "INSERT INTO users(fname,DOB,lname,email,password) VALUES('$fname','$dob','$lname','$email','$pass')";
        $query_run = mysqli_query($conn,$query);
        if($query_run){
            header("Location: index.php");
        }
    }

    mysqli_close($conn);
?>