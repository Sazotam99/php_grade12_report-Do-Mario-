<!DOCTYPE html>
<html lang="en">
<?php
    require "../nav.php";
    $_SESSION['task-id']=$_GET['id'];
    $id=$_SESSION['task-id'];
    $query_run=mysqli_query($conn,"SELECT * FROM todos WHERE id='$id'");
    $row=mysqli_fetch_assoc($query_run);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit task</title>
</head>
<body>
    

<div class="card-body">
    <h1 class="display-1 bg-info-subtle">Edit task details:</h1><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Date</th>
                <th>Task</th>
                <th>Due</th>
                
            </tr>
        </thead>
        <form action="add.php" method="post">
            <tr id="edit">
                <td><input type="date" name="iDate" class="form-control" value="<?=$row['iDate'] ?>"></td>
                <td><input type="text" name="task" class="form-control" value="<?=$row['task'] ?>"></td>
                <td><input type="date" name="dDate" class="form-control" value="<?=$row['dDate'] ?>"></td>
                <td><input type="submit" value="Save" name="edit" class="form-control" style="color:green"></td>
            </tr>
        </form>
    </table>
</div>
<?php

?>
</body>
</html>