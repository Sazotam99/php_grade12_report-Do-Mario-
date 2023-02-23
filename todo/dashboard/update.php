<!DOCTYPE html>
<html lang="en">
<?php
    require "../nav.php";
    setcookie("task-id",$_GET['id'],time()+8640, '/');
    $id=$_COOKIE['task-id'];
    $query_run=mysqli_query($conn,"SELECT * FROM todos WHERE id='$id'");
    $row=mysqli_fetch_assoc($query_run);
?>
    <title>Edit task</title>
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
<?php include '../footer.php'; ?>
</body>
</html>