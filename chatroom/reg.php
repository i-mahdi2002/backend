<?php
$username = $_POST['user'];
$message = $_POST['message'];
$time = time();

$db = new PDO("mysql:host=localhost;dbname=chat", "root", "");
$db->exec("set names utf8");

$query = $db->prepare("insert into chatroom VALUES ('',:u,:m,FROM_UNIXTIME(:t))");
$query->bindParam(':u', $username, PDO::PARAM_STR);
$query->bindParam(':m', $message, PDO::PARAM_STR);
$query->bindParam(':t', $time, PDO::PARAM_STR);
$result = $query->execute();

$query = $db->prepare("select * from chatroom");
$result = $query->execute();

if($query->rowCount()>0){
    while($row = $query->fetch()){
        echo "<p><span class='sender'>".$row['username'].'</span>'."</p>";
        echo "<span class='textMessage'>".$row['message'].'</span>';
        echo "<br><br>";
    }
}else {
    echo '';
}