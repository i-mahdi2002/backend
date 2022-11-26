<?php
    $dbName = 'E:\xamp\htdocs\projects\tamrin\phpstrom\phonebook\university.mdb';
    if(!file_exists($dbName)){
        echo "file not found";
    }

    $connection = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb)};Dbq=$dbName;Uid=Admin;");

    $query = "select * from students";
    $result = $connection->query($query);

    echo "<pre>";
    var_dump($result->fetchAll());
    echo "</pre>";
    ?>