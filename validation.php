<?php
$value = $_GET['query'];
$formfield = $_GET['field'];
if ($formfield == "username1") {
if (strlen($value) < 4) {
echo "Must be 3+ letters";
} else {
echo "<span>Valid</span>";
}
}
if ($formfield == "password1") {
if (strlen($value) < 6) {
echo "Password too short";
} else {
echo "<span>Strong</span>";
}
}
if ($formfield == "mail1") {
if (!preg_match("/\S+@\S+\.\S+/", $value)) {
echo "Invalid email '$value'";
} else {
echo "<span>Valid</span>";
}
}
if ($formfield == "website") {
if
(!preg_match("/b(?:(?:https?|ftp)://|www.)[-a-z0-9+&@#/%?=~_|!:,.;]*[-a-z0-9+&@#/%=~_|
]/i", $value)) {
echo "Invalid website";
} else {
echo "<span>Valid</span>";
}
}
?>