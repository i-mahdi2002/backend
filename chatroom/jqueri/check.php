<?php


if(@$_POST['username']) {
    sleep(1);
    $userName = $_POST['username'];

    $connection = new PDO("mysql:host=localhost;dbname=login","root","");
    if($connection->errorCode()){
        die('could not:'. $connection->errorInfo());
    }

    $query = $connection->prepare("select * from list where userName= :userName");
    // $item = "%$item%";
    $query->bindParam(':userName', $userName, PDO::PARAM_STR);
    $result = $query->execute();

    // $test = $query->fetchAll();
    // var_dump($test);

    if($query->rowCount()>0) {
        echo "<span style='color:#ff3b0a'>This name already used</span>";
    }else {
        echo "<span style='color:#3bff0a'>Acceptable</span>";
    }
}
// echo "$userName";
?>