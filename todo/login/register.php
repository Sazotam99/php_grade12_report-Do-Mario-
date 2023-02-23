<!DOCTYPE html>
<html lang="en">
<?php include "../config.php";?>
<title>Register</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col md-12">
                <div class="card">
                    <div class="card-header">
                        Register:
                    </div>
                    <div class="card-body">
                        <form action="send.php" method="post">
                            <div class="mb-3">
                                <label for="fname">First Name:</label>
                                <input type="text" name="fname" id="fname" class="form-control" autocomplete="off" required>
                            </div>
                            <div class="mb-3">
                                <label for="lname">Last Name:</label>
                                <input type="text" name="lname" id="lname" class="form-control" autocomplete="off" required>
                            </div>
                            <div class="mb-3">
                                <label for="dob">Date of Birth:</label>
                                <input type="date" name="dob" id="dob" class="form-control" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" autocomplete="off" required>
                            </div>
                            <div class="mb-3">
                                <label for="pass">Password:</label>
                                <input type="password" name="pass" id="pass" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="repass">Confirm Password:</label>
                                <input type="password" name="repass" id="repass" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Register" name="register" id="register" class="btn btn-success" disabled>
                            </div>
                        </form><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const pass = document.getElementById('pass');
        const repass = document.getElementById('repass');

        pass.addEventListener('input', checkInputs);
        repass.addEventListener('input', checkInputs);

        function checkInputs() {
            const input1Value = pass.value.trim();
            const input2Value = repass.value.trim();
            const registerButton = document.getElementById('register');

            if (input1Value !== '' && input2Value !== '' && input1Value==input2Value) {
                registerButton.removeAttribute('disabled');
            } else {
                registerButton.setAttribute('disabled', 'true');
            }
        }

    </script>
    <?php include '../footer.php'; ?>
</body>
</html>