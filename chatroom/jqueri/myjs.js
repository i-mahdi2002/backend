{/* <script src="jquery/jquery-3.6.1.min.js"></script> */}
$(document).ready(function(){
    $("#username").blur(function(){
        $("#result").html('<span>check it...<span>');
        $.ajax({
            type: "POST",
            url: "check.php",
            data:{
                username:"reza"
            },
            success: function(response) {
                $("#result").html(response);
            },
            error: function (xhr, status) {
                $("#result").html(status);
            }
        });
    });
});