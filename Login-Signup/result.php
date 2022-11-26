<?php
session_start();

if(isset($_POST['captcha'])){
    if($_POST['captcha'] == $_SESSION['captcha']){
        echo "<div class='alert-success'><h1>Log in successfully</h1></div>";
            
            echo "<div class='back'><a href=index.php>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                back
            </a></div>";
    }else{
        echo "<div class='alertWarning'><h1>Error : The captcha code is not correct </h1></div>";
            
        echo "<div class='back'><a href=index.php>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            back
        </a></div>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Document</title>
</head>

<body>



</body>

</html>