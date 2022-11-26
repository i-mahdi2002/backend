<?php



$mysql = new mysqli("localhost", "root", "", "phonebook");

// if (!$mysql) {
//     die ('could not connect' . mysqli_error());
// }

// $result = $mysqli->query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");
// $row = $result->fetch_assoc();
// echo htmlentities($row['_message']);

?>


<!--//// mysqli-->
<!--//$mysqli = new mysqli("localhost", "username", "password", "database");-->
<!--//$result = $mysqli->query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");-->
<!--//$row = $result->fetch_assoc();-->
<!--//echo htmlentities($row['_message']);-->
<!--//-->
<!--//// PDO-->
<!--//$pdo = new PDO('mysql:host=localhost;dbname=database', 'username', 'password');-->
<!--//$statement = $pdo->query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");-->
<!--//$row = $statement->fetch(PDO::FETCH_ASSOC);-->
<!--//echo htmlentities($row['_message']);-->
<!--//-->
<!--//// mysql-->
<!--//$c = mysql_connect("localhost", "username", "password");-->
<!--//mysql_select_db("database");-->
<!--//$result = mysql_query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");-->
<!--//$row = mysql_fetch_assoc($result);-->
<!--//echo htmlentities($row['_message']);-->