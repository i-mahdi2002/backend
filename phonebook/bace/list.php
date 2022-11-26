<?php
include_once "database.php";

$result = $mysql->query("select * from person");

if(!$result){
    echo "<h3 style='color:red'>The operation failed</h3>";
}
else{
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
<body>

<table class="table table-striped table-hover ">
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
?>
<script src="js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>

