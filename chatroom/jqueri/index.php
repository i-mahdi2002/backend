<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <script src="jquery/jquery-3.6.1.min.js"></script>
    <script src="myjs.js"></script>
    <title>Document</title>
    <script>
        // $(document).ready(function() {
        //     $("#username").blur(function() {
        //         $("#result").html('<h5 class="error">check it...<h5>');
        //         $.ajax({
        //             type: "POST",
        //             url: "check.php",
        //             data: {
        //                 username: $("#username").val()
        //             },
        //             success: function(response) {
        //                 $("#result").html(response);
        //             },
        //             error: function(xhr, status) {
        //                 $("#result").html(status);
        //             }
        //         });
        //     });
        // });
    </script>
</head>

<body>


    <div class="login-box">
        <h2>Sign In</h2>
        <form action="result.php" method="post">
            <div class="user-box user">
                <input type="text" id="username" name="username" required="" onblur="check()" />
                <label class="name">User Name</label>
                <span class="error" id="result"></span>
            </div>
            <div class="user-box">
                <input type="password" id="passone" name="passone" required="" />
                <label class="name">password</label>
            </div>
            <div class="user-box user">
                <input type="password" id="passtwo" oninput="pass()" name="passtwo" class="c" required="" />
                <label class="name">replace password</label>
                <span class="pass" id="pass"></span>
            </div>
            <button type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
            </button>

        </form>
    </div>


</body>

</html>