<?php
$username = $_POST['name'];
$useremail = $_POST['email'];
$userphone = $_POST['phone'];
$usermessage = $_POST['message'];

$link = mysqli_connect("localhost", "root", "", "contactformdb");

if ($link == false) {
    die("Error: Connection could not be established." . mysqli_connect_error());
}

$sql = "INSERT INTO userinfo (uname, uemail, uphone, umessage) VALUES ('$username', '$useremail', '$userphone', '$usermessage')";

if (mysqli_query($link, $sql)) {
    echo "User details entered sucessfully";
} else {
    echo "Error: SQL query ended in failure." . mysqli_error($link);
}

mysqli_close($link);
