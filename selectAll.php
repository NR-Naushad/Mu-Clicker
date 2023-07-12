
<?php
error_reporting(0);
require_once('dbconnection.php');

 $sql = "SELECT * FROM user";
$result = mysqli_query($conn,$sql);

?>
<h2>Browse Users</h2>
<hr>
<table border="1">
<tr>
<td>sr no</td>
<td>Name</td>
<td>Email</td>
<td>Password</td>
<td colspan="2">operations</td>
</tr>

<?php
while ($row = mysqli_fetch_assoc($result)) {
echo '
<tr>
<td>'.$row['srno'].'</td>
<td>'.$row['username'].'</td>
<td>'.$row['email'].'</td>
<td>'.$row['fpassword'].'</td>
<td><a href="edit.php?srno='.$row['srno'].'">Edit</a></td>
<td><a href="delete.php?srno='.$row['srno'].'">Delete</a></td>
</tr>
';
}
?>
</table>

