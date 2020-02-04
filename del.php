<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newwebsite";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM mytable WHERE id=";

if (mysqli_query($conn, $sql)) {
    header('refresh:.5; url=adminpanel.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>