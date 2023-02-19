<?php 
    require "../config.php";
    $email=htmlspecialchars($_POST['email']);
    $pass=htmlspecialchars($_POST['pass']);

    $query = "SELECT * FROM users WHERE email='$email'";
    $query_run = mysqli_query($conn,$query);
    if(mysqli_num_rows($query_run)>0){
        while ($row = mysqli_fetch_assoc($query_run)) {
            // Access the data as an array
            if($pass==$row['password']){
                setcookie("user", $row['fname'] , time() + (86400), "/");
                setcookie("lname", $row['lname'] , time() + (86400), "/");
                setcookie("uid", $row['id'] , time() + (86400), "/");
                setcookie("email", $row['email'] , time() + (86400), "/");
                setcookie("pass", $row['password'] , time() + (86400), "/");
                setcookie("dob", $row['DOB'] , time() + (86400), "/");
                setcookie("login", true , time() + (86400), "/");
                header("Location: /todo");
            }
            else{
                setcookie("login", false , time() + (86400), "/");
                header("Location: /todo");
            }
          }
    }
    else{
        echo 'email mismatch';
    }

    exit;
?>