<?php
   require_once('dbconnection.php');



 $sql = "Delete from user where srno='".$_GET['srno']."'";

 if($conn->query($sql) === TRUE){
    echo "Record added succesfuly";
 }
 else{
    echo "Error deleting record" . $conn->error;
 }
 header("location:selectAll.php");
   $conn->close();
   ?>
   