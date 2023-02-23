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

                setcookie("user", $row['fname'] , time() + (8640), "/");
                setcookie("lname", $row['lname'] , time() + (8640), "/");
                setcookie("uid", $row['id'] , time() + (8640), "/");
                setcookie("email", $row['email'] , time() + (8640), "/");
                setcookie("pass", $row['password'] , time() + (8640), "/");
                setcookie("dob", $row['DOB'] , time() + (8640), "/");
                setcookie("login", true , time() + (8640), "/");
                header("Location: /todo");
            }
            else{
                header("Location: /todo");
                setcookie("login", false , time() + (8640), "/");
            }
          }
    }
    else{
        echo 'email mismatch';
    }

    exit;
?>