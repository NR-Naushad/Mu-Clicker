<?php 

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "muclicker";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);


if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>