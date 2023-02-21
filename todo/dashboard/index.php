<!DOCTYPE html>
<html lang="en">
<?php require "../nav.php";
    if(!$_COOKIE['login']){
        header("Location: ../login");
    }
?>
<title>Home</title>
<body>
<div class="container">
        <div class="card display-5 bg-info-subtle">
            This is Do-Mario, A general purpose To-Do list manager for everyone.
        </div>
    </div>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                Hi, <?=$_COOKIE['user']?>
            </div>
            <div class="card-body">
                <?php
                 $id=$_COOKIE['uid'];
                 $query="SELECT * FROM todos WHERE owner='$id'";
                 $query_run=mysqli_query($conn,$query);
                 while($row=mysqli_fetch_assoc($query_run)){
                    if(isset($row)){
                        ?>
                        There are some tasks waiting:
                        <?php
                    }else{
                        ?>
                        Begin by adding new task:
                        <?php
                    }
                    
                 }
                ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Task</th>
                            <th>Due</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                            $id=$_COOKIE['uid'];
                            $query="SELECT * FROM todos WHERE owner='$id'";
                            $query_run=mysqli_query($conn,$query);
                            while($row=mysqli_fetch_assoc($query_run)){
                                ?>
                                <tr>
                                    
                                    <td><?=$row['iDate']?></td>
                                    <td class="text-break"><?=$row['task']?></td>
                                    <td><?=$row['dDate']?></td>
                                    
                                    <td><?=$row['status']?> 
                                        <?php
                                            if($row['status']=='active'){
                                                ?>
                                                <span> || <a href="add.php?tid=<?=$row['id']?>"><button class="done btn btn-outline-success">Done</button></a></span>
                                                <?php
                                            }
                                        ?>
                                    </td>
                                    
                                    <td><a href="update.php?id=<?=$row['id'] ?>"><button  class="btn btn-outline-primary">Edit</button></a>
                                    <a href="delete.php?id=<?=$row['id'] ?>"><button  class="btn btn-outline-danger">Delete</button></a>
                                    </td>
                                </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                
                    <tr>
                        <td class="fs-2 text-bg">Add tasks:</td>
                    </tr>
                    <form action="add.php" method="post">
                        <tr id="add">
                            <td><input type="date" name="iDate" class="form-control" id="iDate"></td>
                            <td><input type="text" name="task" class="form-control"></td>
                            <td><input type="date" name="dDate" class="form-control" id="dDate"></td>
                            <td><input type="text" name="status" class="form-control" value="active" readonly></td>
                            <td><input type="submit" value="Add" name="add" class="form-control" style="color:green"></td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>
    </div>
    <script>
        var today = new Date();
        var year = today.getFullYear();
        var month = ("0" + (today.getMonth() + 1)).slice(-2);
        var day = ("0" + today.getDate()).slice(-2);
        var formattedDate = year + "-" + month + "-" + day;
        document.querySelector("#iDate").value = formattedDate;
        document.querySelector("#dDate").value = formattedDate;

        document.getElementsByClassName("class").addEventListener("click", function(){
            
        });

    </script>
    <?php 
        
        
    ?>
</body>
</html>
