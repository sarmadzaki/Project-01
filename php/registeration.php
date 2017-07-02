<?php

include 'db.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$company = $_POST['company'];
$city = $_POST['city'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pass = $_POST['pass'];

mysqli_query($con, "INSERT INTO users VALUES ('', '".$fname."', '".$lname."', '".$pass."', '".$company."', '".$city."', '".$email."', '".$phone."')");

echo "Registeration Successfully Done!";


?>