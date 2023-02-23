<?php
    require '../config.php';

    if(isset($_POST['edit'])){
            
        $dDate=$_POST['dDate'];
        $task=$_POST['task'];
        $iDate=$_POST['iDate'];
        $status=$_POST['status'];
        $id=$_COOKIE['task-id'];

        $query="UPDATE  todos SET iDate='$iDate', task='$task', dDate='$dDate' WHERE id='$id'";
        $query_ins=mysqli_query($conn,$query);

        if(!$query_ins){
            echo mysqli_error($conn);
        }
        else{
            header("Location: ../dashboard");
        }

    }

    else if(isset($_POST['add'])){
        $dDate=$_POST['dDate'];
        $task=$_POST['task'];
        $iDate=$_POST['iDate'];
        $status=$_POST['status'];
        $owner=$_COOKIE['uid'];
    
        $query="INSERT INTO todos(owner,dDate,task,iDate,status) VALUES('$owner','$dDate','$task','$iDate','$status')";
        $query_run=mysqli_query($conn,$query);
        if(!$query_run){
            echo mysqli_error($conn);
        }
        else{
            header("Location: ../dashboard");
        }
    }

    else{
        $tid=$_GET['tid'];
        $query="UPDATE  todos SET status='done' WHERE id='$tid'";
        $query_ins=mysqli_query($conn,$query);
        if(!$query_ins){
            echo mysqli_error($conn);
        }
        else{
            header("Location: ../dashboard");
        }
    }

?>