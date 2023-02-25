<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Sales Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>sales Edit 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $sales_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM sales WHERE id='$sales_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $sales = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="sales_id" value="<?= $sales['id']; ?>">

                                    <div class="mb-3">
                                        <label>Sales Name</label>
                                        <input type="text" name="name" value="<?=$sales['cusn'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Sales Email</label>
                                        <input type="text" name="item" value="<?=$sales['item'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Sales Phone</label>
                                        <input type="text" name="price" value="<?=$sales['price'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Sales Course</label>
                                        <input type="text" name="contact" value="<?=$sales['contact'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_sales" class="btn btn-primary">
                                            Update Sales
                                        </button>
                                    </div>
                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>