function check() {
  var username = document.getElementById("username").value;

  if (username != "") {
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
        document.getElementById("result").innerHTML = xhr.responseText;
      } else if (xhr.readyState != 4) {
        document.getElementById("result").innerHTML = "loading ...";
      } else {
        document.getElementById("result").innerHTML = "Error : the Ajax failed";
      }
    };
    xhr.open("POST", "controller/checkUser.php", true);
    xhr.setRequestHeader("content-Type", "application/x-www-form-urlencoded");
    xhr.send("username=" + username);
  }
}

function pass() {
  var pass1 = document.getElementById("passOne").value;
  var pass2 = document.getElementById("passTwo").value;

  if (pass1 == pass2) {
    document.getElementById("pass").innerHTML =
      "<span style='color:#3bff0a'>Repeating ok</span>";
  } else {
    document.getElementById("pass").innerHTML =
      "<span style='color:#ff3b0a'>Repeating the password is not correct</span>";
  }
}
