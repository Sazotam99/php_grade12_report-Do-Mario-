<!DOCTYPE html>
<html lang="en">
<?php include "../config.php";?>
<title>Login</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col md-12">
                <div class="card">
                    <div class="card-header">
                        Login:
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="post">
                            <div class="mb-3">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="pass">Password:</label>
                                <input type="password" name="pass" id="pass" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Login" name="login" id="login" class="btn btn-success" disabled>
                            </div>          
                        </form><br>
                        Not registered yet? <a href="register.php"><button id="btn-rgd" class="btn btn-outline-secondary">Register</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const email = document.getElementById('email');
        const pass = document.getElementById('pass');

        email.addEventListener('input', checkInputs);
        pass.addEventListener('input', checkInputs);

        function checkInputs() {
            const input1Value = email.value.trim();
            const input2Value = pass.value.trim();
            const loginButton = document.getElementById('login');

            if (input1Value !== '' && input2Value !== '') {
                loginButton.removeAttribute('disabled');
            } else {
                loginButton.setAttribute('disabled', 'true');
            }
        }
    </script>
</body>
</html>