<?php
include "../model/database.php";

if(isset($_POST['username'])){
    $user = $_POST['username'];

    $query = $db->prepare("select * from list where userName= :username");
    $query->bindParam(':username', $user, PDO::PARAM_STR);
    $query->execute();
    if($query->rowCount()>0){
        echo "<span style='color:#ff3b0a'>This name already used</span>";
    }else {
        echo "<span style='color:#3bff0a'>Acceptable</span>";
    }
}


