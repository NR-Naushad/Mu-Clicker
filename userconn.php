<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['email']) &&
        isset($_POST['fpassword']) && isset($_POST['cpassword'])
        ) {
        
        $username = $_POST['username'];
        $email = $_POST['email'];
        $cpassword = $_POST['cpassword'];
        $fpassword = $_POST['fpassword'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "muclicker";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM adduser WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO adduser ( username, email, fpassword, cpassword ) values(?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssss",  $username, $mno, $email,  $fpassword, $cpassword);
                if ($stmt->execute()) {
                    echo "Thank you for Registration.";
                    
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>