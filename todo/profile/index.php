<html>
    <?php require '../nav.php';?>
<body>
    <div class="container profile-section mt-5">
    <div class="card">
    <div class="card-header">
        <h2 class="mb-0">Profile</h2>
    </div>
    <div class="card-body">
        <div class="row">
        <div class="col-md-2">
            <span class="display-1 text-bg-dark"><?=$_COOKIE['user'][0]." ".$_COOKIE['lname'][0]?></span>
        </div>
        <div class="col-md-8 fs-3">
            <h3 class="display-5 font-monospace"><?=$_COOKIE['user']." ".$_COOKIE['lname'] ?></h3>
            <p>Email: <?=$_COOKIE['email']?></p>
            <p>Date of Birth: <span id="dob"><?=$_COOKIE['dob'] ?></span> </p>
            <p>Horoscope: <span id="horo"></span> </p>
        </div>
        </div>
        <hr>
        <a href="edit.php"><button class="btn btn-primary float-end">Edit Profile</button></a>
    </div>
    </div>
    </div>
    <script>
        var date = "<?=$_COOKIE['dob']?>";
        document.getElementById("horo").innerText=horoscope(date);

        function horoscope(date){
            var month = Number(date.split("-")[1]);  
            var day = date.split("-")[2];

            if ((month == 3 && day >= 21) || (month == 4 && day <= 19)) {
                return "Aries";
            } else if ((month == 4 && day >= 20) || (month == 5 && day <= 20)) {
            return "Taurus";
            } else if ((month == 5 && day >= 21) || (month == 6 && day <= 20)) {
            return "Gemini";
            } else if ((month == 6 && day >= 21) || (month == 7 && day <= 22)) {
            return "Cancer";
            } else if ((month == 7 && day >= 23) || (month == 8 && day <= 22)) {
            return "Leo";
            } else if ((month == 8 && day >= 23) || (month == 9 && day <= 22)) {
            return "Virgo";
            } else if ((month == 9 && day >= 23) || (month == 10 && day <= 22)) {
            return "Libra";
            } else if ((month == 10 && day >= 23) || (month == 11 && day <= 21)) {
            return "Scorpio";
            } else if ((month == 11 && day >= 22) || (month == 12 && day <= 21)) {
            return "Sagittarius";
            } else if ((month == 12 && day >= 22) || (month == 1 && day <= 19)) {
            return "Capricorn";
            } else if ((month == 1 && day >= 20) || (month == 2 && day <= 18)) {
            return "Aquarius";
            } else if ((month == 2 && day >= 19) || (month == 3 && day <= 20)) {
            return "Pisces";
            } else {
            return "Invalid date";
            }
        }
        
    </script>

</body>
</html>