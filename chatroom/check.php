<?php

$username = $_POST['user'];

$db = new PDO("mysql:host=localhost;dbname=chat", "root", "");
$db->exec("set names utf8");
$query = $db->prepare("select * from chatroom");
$result = $query->execute();

if($query->rowCount()>0){
    while($row = $query->fetch()){
        echo "<p><span class='sender'>".$row['username'].'</span>'."</p>";
        echo "<span class='textMessage'>".$row['message'].'</span>';
        echo "<br><br>";
    }
}else {
    echo "";
}