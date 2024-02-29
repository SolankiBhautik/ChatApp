<?php
$servername  = "localhost";
$username = "root";
$password = "";
$database = "chat_app";

$conn = mysqli_connect($servername, $username, $password);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysql_error());
}

// Select the database
$db = mysqli_select_db($conn, $database);

// Check the database selection
if (!$db) {
    die ("Could not select database");
}

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

header("Location: login.html");
exit();
?>

