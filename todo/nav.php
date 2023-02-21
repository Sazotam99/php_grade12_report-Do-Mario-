<!DOCTYPE html>
<html lang="en">
<?php require '../config.php';?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-black">
        <div class="container-fluid">
            <a class="navbar-brand" href="/todo/"><img src="https://www.pngplay.com/wp-content/uploads/9/Mario-Transparent-Background.png" alt="Logo" width="60" height="70" class="d-inline-block align-text-top">
            <br> Do-Mario</a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/todo"><button class="fs-4 btn float-end" id="home">Home</button></a><br></li>
                <li class="nav-item"><a href="../profile"><button class="fs-4 btn float-end" id="prf"">Profile</button></a><br></li>
                <li class="nav-item"><a href="../login"><button class="fs-4 btn float-end" onclick="<?php session_destroy()?>" >Log Out</button></a><br></li>
            </ul>
        </div>
    </nav>

    <script>
        
        if (location.pathname === "/todo/dashboard/") {
            document.getElementById("home").style.display = 'none';
            document.getElementById("prf").style.display = 'block';
        } else if (location.pathname === "/todo/profile/") {
            document.getElementById("home").style.display = 'block';
            document.getElementById("prf").style.display = 'none';
        }
        else{
            document.getElementById("home").style.display = 'block';
            document.getElementById("prf").style.display = 'block';
        }
        
        document.getElementById(npage).style.display='block';
    </script>
</body>
</html>