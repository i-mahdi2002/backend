<?php
function rrmdir($dir) {
    if (is_dir($dir)) {
        $list = glob("$dir/*");
        foreach ($list as $item) {
                if (is_dir($item)){
                    rrmdir($item);
                }else{
                    unlink($item);
                }
        }
        //reset($list);
        rmdir($dir);
    }
}

$dir = substr($_GET['dir'],0,-1);
$fileName = $_GET['fileName'];
if(is_dir($fileName)){
   rrmdir($fileName);
}else{
    unlink($fileName);
}


$returnPath = dirname($_SERVER['PHP_SELF']).'/index.php?dir='.$dir;echo $returnPath;
header("location:$returnPath");