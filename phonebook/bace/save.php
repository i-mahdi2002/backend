<?php
include_once "database.php";

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$phoneNumber = $_POST['phoneNumber'];
$groupName = $_POST['groupName'];

$query = $mysql->query("INSERT into person VALUES ('','$firstName','$lastName','$phoneNumber','$groupName')");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div style="margin-top: 100px" class="position-relative bg-light alert alert-primary">
                <?php
                if($query){
                    echo "<div class='alert alert-success'>";
                    echo "<h3 class=text-success style='color:#31b631'>The save operation was completed successfully</h3>";
                    echo "</div>";
                }else{
                    echo "<div class='alert alert-danger'>";
                    echo "<h3 class='text-danger'>The save operation failed</h3>";
                    echo "</div>";
                }
                ?>

                <a style="width:100px" class="btn btn-outline-info" href="../index.php">return</a>
            </div>
        </div>
    </div>






<script src="js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>
</html>