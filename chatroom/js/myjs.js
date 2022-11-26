// $(document).ready(function() {
//     var username = "<?php echo $_GET['username']; ?>";
//     window.setInterval(updateChatRoom, 5000);

//     function updateChatRoom() {
//         $.ajax({
//             type: "POST",
//             url: "check.php",
//             data: {
//                 user:username
//             },
//             success: function(response) {
//                 $(".chatBox").html(response);
//                 $(".chatBox").scrollTop($(".chatBox").prop("scrollHeight"));
//             },
//             error: function(xhr, status) {
//                 $(".chatBox").html(response);
//                 $(".chatBox").scrollTop($(".chatBox").prop("scrollHeight"));
//             }
//         });
//     }

//     $("#messageBox").keydown(function(e){
//         if(e.which == '13'){
//             data = $("#messageBox").val();
//             $.ajax({
//                 type: "POST",
//                 url: "reg.php",
//                 data:{
//                     message:data,
//                     user:username
//                 },
//                 success: function(response) {
//                     $(".chatBox").html(response);
//                     $(".chatBox").scrollTop($(".chatBox").prop("scrollHeight"));
//                 },
//                 error: function(xhr, status) {
//                     $(".chatBox").html(response);
//                     $(".chatBox").scrollTop($(".chatBox").prop("scrollHeight"));
//                 }
//             });
//             $("#messageBox").val('');
//         }
//     });

//     updateChatRoom();
//     $(".chatBox").scrollTop($(".chatBox").prop("scrollHeight"));
// });




