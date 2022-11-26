<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .uploadBox{
            background-color: aqua;
            padding: 8px;
        }
        .icon{
            cursor: pointer;
            -moz-user-select: none;
            width: 120px;
            height: 103px;
            overflow: hidden;
            cursor: pointer;
            z-index: 0;
            float:left;
            border-radius: 10px;
        }
        .icon:hover{
            background-color: #94d9ff;
        }
        .iconImageFolder{
            background: transparent url("images/folder_icon.png") repeat scroll 0% 0%;
            width: 73px;
            height: 73px;
            margin: 0px auto;
            text-align: center;
        }
        .iconImageFile{
            background: transparent url("images/file_icon.png") repeat scroll 0% 0%;
            width: 73px;
            height: 73px;
            margin: 0px auto;
            text-align: center;
        }
        .iconParent{
            background: transparent url("images/parent_icon.png") repeat scroll 0% 0%;
            width: 73px;
            height: 73px;
            margin: 0px auto;
            text-align: center;
        }
        .iconNewFolder{
            background: transparent url("images/newFolder_icon.png") repeat scroll 0% 0%;
            width: 73px;
            height: 73px;
            margin: 0px auto;
            text-align: center;
        }
        .iconTitle{
            font-family: Tahoma,Geneva,sans-serif;
            font-size: 13px;
            color: #000;
            text-align: center;
            margin: 0px auto;
            max-width: 120px;
            max-height: 30px;
            overflow: hidden;
        }
        .iconRemove{
            float: left;
            background: transparent url("images/remove_icon.png") repeat scroll 0% 0%;
            width: 15px;
            height: 15px;
            margin: 0px auto;
            text-align: center;
            margin-left: 27px;

        }
        .iconRename{
            float: left;
            background: transparent url("images/rename_icon.png") repeat scroll 0% 0%;
            width: 15px;
            height: 15px;
            margin: 0px auto;
            text-align: center;
            margin-left: 5px;
        }

    </style>
    <?php
        if(isset($_GET['dir']) && !empty($_GET['dir'])){
            $currentDir = $_GET['dir'].'/';
        }else{
            $currentDir = 'myComputer/';
        }
//        echo $currentDir;
//    echo "<br>";
        $filesList = glob("$currentDir*");
//        print_r($filesList);
    ?>
    <script language="javascript">
        function createFolder(){
            var folderName = prompt("Please enter your folder name", "");
            if(folderName == null){
                return false;
            }else if(folderName == ''){
                    alert("please enter a name in box");
            }else{
               window.location = "createFolder.php?dir=<?php echo $currentDir;?>&newFolderName="+folderName;
            }

        }
        function removeThis(fileName){
            if(fileName != ''){
                window.location = "remove.php?dir=<?php echo $currentDir;?>&fileName="+fileName;
            }
        }
        function renameThis(fileName){
            if(fileName != ''){
                var newName = prompt("Please enter your new name", "");
                if(newName == null){
                    return false;
                }else if(newName == ''){
                    alert("please enter a name in box");
                }else{
                    window.location = "rename.php?dir=<?php echo $currentDir;?>&fileName="+fileName+"&newName="+newName;
                }
            }
        }
    </script>
</head>
<body>
<div class="uploadBox">
    <form action="doUpload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="myFile">
        <input type="text" name="myPath"  value="<?php echo $currentDir;?>">
        <input type="submit" value="Upload Image" name="submit">
    </form>
</div>
<br>
<br>
<?php
//====================== back to parent directory =======================
    if($currentDir != 'myComputer/'){
        echo "<a href='?dir=".dirname($currentDir)."'>
                <div class='icon'>
                    <div class='iconParent'></div>
                    <div class='iconTitle'>..</div>
                </div>
        </a>";

    }

//===================== create current directory file and folders ======

    foreach($filesList as $currentFile){
        if(is_dir($currentFile)){
            echo "<a href='?dir=$currentFile'>
                    <div class='icon'>
                        <div class='iconRemove' onclick='removeThis(\"".$currentFile."\");return false;'></div>
                        <div class='iconRename' onclick='renameThis(\"".$currentFile."\");return false;'></div>
                        <div class='iconImageFolder'></div>
                        <div class='iconTitle'>".str_replace($currentDir, '', $currentFile)."</div>

                    </div>
                </a>";
        }else{
            echo "<a href='$currentFile'>
                    <div class='icon'>
                        <div class='iconRemove' onclick='removeThis(\"".$currentFile."\");return false;'></div>
                        <div class='iconRename' onclick='renameThis(\"".$currentFile."\");return false;'></div>
                        <div class='iconImageFile'></div>
                        <div class='iconTitle'>".str_replace($currentDir, '', $currentFile)."</div>

                    </div>
                </a>";
        }
    }
//===================== create New folder ================================
    echo "<a onclick='createFolder();'>
            <div class='icon'>
                <div class='iconNewFolder'></div>
                <div class='iconTitle'>+</div>
            </div>
    </a>";
?>
</body>
</html>
