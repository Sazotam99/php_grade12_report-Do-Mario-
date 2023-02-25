<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_sales']))
{
    $sales_id = mysqli_real_escape_string($con, $_POST['delete_sales']);

    $query = "DELETE FROM sales WHERE id='$sales_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Sales Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Sales Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

else if(isset($_POST['update_sales']))
{
    $sales_id = mysqli_real_escape_string($con, $_POST['sales_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $item = mysqli_real_escape_string($con, $_POST['item']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);

    $query = "UPDATE sales SET cusn='$name', item='$item', price='$price', contact='$contact' WHERE id='$sales_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Sales Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Sales Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


else if(isset($_POST['save_sales']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $item = mysqli_real_escape_string($con, $_POST['item']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);

    $query = "INSERT INTO sales (cusn,item,price,contact) VALUES ('$name','$item','$price','$contact')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Sales Inserted Successfully";
        header("Location: sales-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Sales Not Inserted";
        header("Location: sales-create.php");
        exit(0);
    }
}

    $tid=$_GET['tid'];
    $query="UPDATE  sales SET status='paid' WHERE id='$tid'";
    $query_ins=mysqli_query($con,$query);
    if(!$query_ins){
        echo mysqli_error($conn);
    }
    else{
        header("Location: index.php");
    }

?>