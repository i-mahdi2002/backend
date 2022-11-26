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
        <form action="sign-up.php" method="post" enctype="multipart/form-data">
            <div class="user-box">
                <input type="text" name="name" id="username" onblur="check()" required="" />
                <label class="name">User Name</label>
                <div class="error" id="result"></div>
            </div>
            <div class="user-box">
                <input type="Email" name="name" id="username" onblur="check()" required="" />
                <label class="name">Email</label>
                <div class="error" id="result"></div>
            </div>
            <div class="user-box">
                <input type="password" name="name" id="passOne" required="" />
                <label class="name">password</label>
            </div>
            <div class="user-box password">
                <input type="password" class="password" name="name" id="passTwo" oninput="pass()" required="" />
                <label class="name">confirm password</label>
                <span class="pass" id="pass"></span>
            </div>
            <div class="check">
                <input id="checkbox-1" class="checkbox-custom" name="checkbox-1" type="checkbox" >
                <label for="checkbox-1" class="checkbox-custom-label" >Remember Me</label>
            </div>
           
            <button type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
            </button>
            <span><a href="index.php">sign In</a></span>

        </form>
    </div>

    <script>
    
    </script>
</body>

</html>