
<?php
$name = $_POST['username'];
$pass = $_POST['password'];

echo $name, $pass;
$connection = new mysqli("localhost", "root", "", "contactformdb");

if ($connection->connect_error) {
    die("Error: Connection could not be established.");
}

$sql = "SELECT * FROM `admininfo` WHERE 1";
$result = $connection->query($sql);

if (!$result) {
    die("Invalid query: " . $connection->error);
}

$content = $result->fetch_assoc();
$adminname = $content["adminname"];
$adminpass = $content["adminpass"];

if ($name == $adminname && $pass == $adminpass) {
    header('location: contact_details_table.php'); //change this to table page
} else {
    header('location: index.html');
}

mysqli_close($link);

?>
