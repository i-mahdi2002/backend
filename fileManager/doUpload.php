<?php
$file_name = $_FILES['myFile']['name'];
$path = substr($_POST['myPath'],0,-1);
$target_path = $path."/".$file_name;
if(move_uploaded_file($_FILES['myFile']['tmp_name'], $target_path)) {
    echo "successful";
    echo "<br>".'<a href="'.dirname($_SERVER['PHP_SELF']).'/index.php?dir='.$path.'">return to back</a>';
}else {
    echo "error";
    echo "<br>".'<a href="'.dirname($_SERVER['PHP_SELF']).'/index.php?dir='.$path.'">return to back</a>';
}