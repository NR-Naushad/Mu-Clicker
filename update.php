<?php

require_once('dbconnection.php');
$sql = "UPDATE user SET username='".$_POST['username']."',email='".$_POST['email']."', WHERE username='".$_POST['username']."',email='".$_POST['email']."';

if(mysqli_query($conn,$sql))
{
 echo "update table successfully";
}else{
echo "error in updating table".mysqli_connect_error($conn);
}
header("location:selectAll.php");
mysqli_close($conn);
?>