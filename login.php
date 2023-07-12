<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
     // header("location: index.html");
	
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$cpassword = md5($_POST['fpassword']);

	$sql = "SELECT * FROM user WHERE email='$email' AND cpassword='$fpassword'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		
		header("location: index.html");
		
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}


?>
