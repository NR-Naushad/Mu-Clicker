<?php
$servername = "localhost";
$username = "root";
$email = "";
$fpassword = "";
$cpassword = "";
$dbname = "muclicker";

 
// Create connection
$conn = new mysqli($localhost, "root", "", "", "", $muclicker);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO adduser (username, email, fpassword, cpassword)
VALUES ('".$_GET['username']."', '".$_GET['email']."', '".$_GET['fpassword']."','".$_GET['cpassword']."')";

echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
// header("location:selectAll.php");


$conn->close();
?>