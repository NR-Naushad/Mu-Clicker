<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$fpassword = md5($_POST['fpassword']);
	//$cpassword = md5($_POST['cpassword']);

	
			$sql = "INSERT INTO user (username, email, fpassword, cpassword)
					VALUES ('$username', '$email', '$fpassword','$cpassword')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		
		}
		
	else {
		echo "<script>alert('Somethin went wrong.. Re-enter Details...!!! ')</script>";
		header("location:login.html");
	}

//header("location:index.html");
header("location:selectAll.php");
$conn->close();



?>