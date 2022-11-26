<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/checkUser.js"></script>
    <title>Document</title>
</head>

<body>


    <div class="login-box">
        <h2>sign In</h2>
        <form action="result.php" method="post" enctype="multipart/form-data">
            <div class="user-box">
                <input type="text" name="name" id="username" required="" />
                <label class="name">User Name</label>
                <div class="error" id="result"></div>
            </div>
            <div class="user-box">
                <input type="password" name="name" required="" />
                <label class="name">password</label>
            </div>
            <div>
                <input id="checkbox-1" class="checkbox-custom" name="checkbox-1" type="checkbox" >
                <label for="checkbox-1" class="checkbox-custom-label" >Remember Me</label>
            </div>
            <div class="captcha" onclick="chang()" id="captcha">
                <img src="captcha.php" width="300px" height="60px" style="cursor: pointer;">
            </div>
            <div class="user-box cap">
                <input type="text" name="captcha" class="c" required="" />
                <label class="name">captcha</label>
            </div>
            <button type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
            </button>
            <span><a href="sign-up.php">sign Up</a></span>

        </form>
    </div>

    <script>
        function chang() {
            document.getElementById("captcha").innerHTML = '<img src="captcha.php" width="300px" height="60px" style="cursor: pointer;">';
        }
    </script>
</body>

</html>