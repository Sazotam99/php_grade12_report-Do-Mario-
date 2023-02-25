<!-- Starting session -->
<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Create</title>
</head>
<body>
  
    <div class="container mt-5">
        <!-- Including message.php file to show a message when any operation is performed -->
        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Sales Add 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Customer's Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Item</label>
                                <input type="text" name="item" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Price</label>
                                <input type="number" name="price" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Contact</label>
                                <input type="number" name="contact" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_sales" class="btn btn-success">Save sales</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
