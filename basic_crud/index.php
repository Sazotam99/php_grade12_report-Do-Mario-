<?php
    session_start();
    require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Sales CRUD</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Sales Details
                            <a href="sales-create.php" class="btn btn-success float-end">Add Sales</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr class="table-info">
                                    <th>ID</th>
                                    <th>Customer's Name</th>
                                    <th>Item</th>
                                    <th>Price</th>
                                    <th>Contact</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM sales";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $sales)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $sales['id']; ?></td>
                                                <td><?= $sales['cusn']; ?></td>
                                                <td><?= $sales['item']; ?></td>
                                                <td><?= $sales['price']; ?></td>
                                                <td><?= $sales['contact']; ?></td>
                                                <td><?= $sales['status'];?></td>
                                                <td>
                                                    <?php
                                                        if($sales['status']=='unpaid'){
                                                            ?>
                                                            <span><a href="code.php?tid=<?=$sales['id']?>" class="btn btn-warning btn-sm">Set Paid</a></span>
                                                            <?php
                                                        }
                                                    ?>
                                                    
                                                    <a href="sales-edit.php?id=<?= $sales['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_sales" value="<?=$sales['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>