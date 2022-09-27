function formValidate() {
  var pass = document.getElementById("pass").value;
  var pass2 = document.getElementById("confpass").value;
  var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}$/;
  if (!pass.match(passw)) {
    alert(
      "Password must be between 8 and 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter"
    );
  }
  if (pass != pass2) {
    alert("Passwords do not match");
  }
}
var my_func = function (event) {
  event.preventDefault();
};
function validate(field, query) {
  var xmlhttp;
  if (window.XMLHttpRequest) {
    // for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else {
    // for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function () {
    if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
      document.getElementById(field).innerHTML = "Validating..";
    } else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      document.getElementById(field).innerHTML = xmlhttp.responseText;
    } else {
      document.getElementById(field).innerHTML =
        "Error Occurred. <a href='index.php'>Reload Or Try Again</a> the page.";
    }
  };
  console.log(field);
  console.log(query);
  xmlhttp.open(
    "GET",
    "validation.php?field=" + field + "&query=" + query,
    false
  );
  xmlhttp.send();
}
