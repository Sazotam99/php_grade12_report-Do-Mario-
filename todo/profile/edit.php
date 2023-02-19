<!DOCTYPE html>
<html lang="en">
<?php include "../nav.php";?>
<title>Edit profile</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Profile:
                    </div>
                    <div class="card-body">
                        <form action="../login/send.php" method="post">
                            <div class="mb-3">
                                <label for="fname">First Name:</label>
                                <input type="text" name="fname" id="fname" class="form-control" value="<?=$_COOKIE['user']?>">
                            </div>
                            <div class="mb-3">
                                <label for="lname">Last Name:</label>
                                <input type="text" name="lname" id="lname" class="form-control" value="<?=$_COOKIE['lname']?>">
                            </div>
                            <div class="mb-3">
                                <label for="dob">Date of Birth:</label>
                                <input type="date" name="dob" id="dob" class="form-control" value="<?=$_COOKIE['dob']?>">
                            </div>
                            <div class="mb-3">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" value="<?=$_COOKIE['email']?>">
                            </div>
                            <div class="mb-3">
                                <label for="pass">Enter Password to save changes:</label>
                                <input type="password" name="pass" id="pass" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Register" name="edit" class="btn btn-success">
                            </div>
                        </form><br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>