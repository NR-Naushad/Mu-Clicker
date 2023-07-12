<?php
     $servername = $_POST['localhost'];
     $email = $_POST['email'];
     $cpassword = $_POST['cpassword'];
     $dbname = "muclicker"

     $con = new mysqli("localhost","root","", "mucliker");
     if($con->connect_error) {
        die("Failed to connect : ".$con->connect_error);
     } else {
        $stmt = $con->prepare("select * from adduser where email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            if($data['cpassword'] === $cpassword) {
                echo "<h2>Login Successfully</h2>";
            } else {
                echo "<h2>Invaliud Email or password</h2>";
            }
        }
     }
     ?>