<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<?php
include_once "database.php";

$item = $_POST['serch'];


$result= $mysql->query("select * from person where firstName LIKE '%$item%' or lastName LIKE '%$item%' or numbers LIKE '%$item%' or groupName LIKE '%$item%'");

if(!$result){
    echo "<h3 style='color:red'>error in query</h3>";
}
else{

    ?>



<div class="container">
    <div class="row">
        <div style="margin-top: 100px" class="position-relative bg-light alert alert-primary">

            <?php
                if(mysqli_num_rows($result)<1){
                    echo "<div class='alert alert-danger'>";
                    echo "<h3 class='text-danger'>can not find</h3>";
                    echo "</div>";
                }else{

            ?>

            <table class="table table-striped table-hover" >
        <thead style="background-color:#414141" class="text-white">
        <th>first Name</th>
        <th>last Name</th>
        <th>number</th>
        <th>group Name</th>
        </thead>
        <tbody>
        <?php
        while($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>".htmlentities($row['firstName'])."</td>";
            echo "<td>".htmlentities($row['lastName'])."</td>";
            echo "<td>".htmlentities($row['numbers'])."</td>";
            echo "<td>".htmlentities($row['groupName'])."</td>";
            echo "<tr>";
        }
        ?>
        </tbody>
    </table>

    <?php
                }
}

?>
            <br>
            <br>
            <br>
            <a style="width:100px" class="btn btn-outline-info" href="../index.php">return</a>
        </div>
    </div>
</div>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>

