	<?php
include_once('db.php');

	$id=$_GET['member'];
	if(!empty($id))
{
	$ola=mysqli_query($db, "DELETE FROM users WHERE id='$id'")or die(mysqli_error);
	echo '<script>alert("Member Deleted");';
   echo 'window.location= "home.php";</script>';
 }
	
	?>