<?php
include_once "core/database.php";

class phoneBook_model
{
    public function getPerson()
    {
        global $mysql;

        $result = $mysql->prepare("select * from person");
        $result->execute();

        $persons = null;

        while ($row = $result->fetch()) {
            $persons[] = array($row['firstName'], $row['lastName'], $row['numbers'], $row['groupName']);


            // echo "<tr>";
            //     echo "<td>".htmlentities($row['firstName'])."</td>";
            //     echo "<td>".htmlentities($row['lastName'])."</td>";
            //     echo "<td>".htmlentities($row['numbers'])."</td>";
            //     echo "<td>".htmlentities($row['groupName'])."</td>";
            // echo "<tr>";
        }
        return $persons;
    }
    public function save()
    {
        global $mysql;

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $phoneNumber = $_POST['phoneNumber'];
        $groupName = $_POST['groupName'];

        $query = $mysql->query("INSERT into person VALUES ('','$firstName','$lastName','$phoneNumber','$groupName')");

        return $query;
    }
    public function search() {
        global $mysql;
        
        $item = $_POST['search'];

        // '%$item%' or lastName LIKE '%$item%' or numbers LIKE '%$item%' or groupName LIKE '%$item%'

        $result = $mysql->prepare("select * from person where firstName LIKE :name1 or lastName LIKE :name2 or numbers LIKE :number1 or groupName LIKE :group1");
        $item = "%$item%";
        $result->bindParam(':name1',$item,PDO::PARAM_STR);
        $result->bindParam(':name2',$item,PDO::PARAM_STR);
        $result->bindParam(':number1',$item,PDO::PARAM_STR);
        $result->bindParam(':group1',$item,PDO::PARAM_STR);

        $result->execute();        

        $search_person = null;

        while ($row = $result->fetch()) {
            $search_person[] = array($row['firstName'], $row['lastName'], $row['numbers'], $row['groupName']);
        }

        return $search_person;
    }
}
