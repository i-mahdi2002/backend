<?php
session_start();
if (isset($_GET['username'])) {
    $_SESSION['username'] = $_GET['username'];
} else {
    echo "please determine your id";
    exit;
}
?>
<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>

    <script language="javascript">
        $(document).ready(function() {
            var username = "<?php echo $_GET['username']; ?>";
            window.setInterval(updateChatRoom, 1000);
            // if(username == "mahdi"){
            //     document.querySelector(".ma").style.margin = "0 0 0 90%";
            // }
            function updateChatRoom() {
                $.ajax({
                    type: "POST",
                    url: "check.php",
                    data: {
                        user: username
                    },
                    success: function(response) {
                        $(".ma").html(response);
                        $(".chatBox").scrollTop($(".chatBox").prop("scrollHeight"));
                    },
                    error: function(xhr, status) {
                        $(".ma").html(response);
                        $(".chatBox").scrollTop($(".chatBox").prop("scrollHeight"));
                    }
                });
            }

            $("#messageBox").keydown(function(e) {
            //     if(username == "mahdi"){
            //     document.querySelector(".ma").style.margin = "0 0 0 90%";
            // }
                if (e.which == '13') {
                    data = $("#messageBox").val();
                    $.ajax({
                        type: "POST",
                        url: "reg.php",
                        data: {
                            message: data,
                            user: username
                        },
                        success: function(response) {
                            $(".ma").html(response);
                            $(".chatBox").scrollTop($(".chatBox").prop("scrollHeight"));
                        },
                        error: function(xhr, status) {
                            $(".ma").html(response);
                            $(".chatBox").scrollTop($(".chatBox").prop("scrollHeight"));
                        }
                    });
                    $("#messageBox").val('');
                }
            });

            $("#btn").click(function() {
            //     if(username == "mahdi"){
            //     document.querySelector(".ma").style.margin = "0 0 0 90%";
            // }
               
                    data = $("#messageBox").val();
                    $.ajax({
                        type: "POST",
                        url: "reg.php",
                        data: {
                            message: data,
                            user: username
                        },
                        success: function(response) {
                            $(".ma").html(response);
                            $(".chatBox").scrollTop($(".chatBox").prop("scrollHeight"));
                        },
                        error: function(xhr, status) {
                            $(".ma").html(response);
                            $(".chatBox").scrollTop($(".chatBox").prop("scrollHeight"));
                        }
                    });
                    $("#messageBox").val('');
                
            });

            updateChatRoom();
            $(".chatBox").scrollTop($(".chatBox").prop("scrollHeight"));
        });
    </script>

</head>

<body>
    <div class="container">
        <div class="chatBox">
            <div class="ma"></div>
        </div>
        <div class="btn" id="btn"><a href="">Send</a></div>
        <input type="search" class="area" id="messageBox">
        
    </div>
    <br>
    <br>
    <br>
</body>

</html>