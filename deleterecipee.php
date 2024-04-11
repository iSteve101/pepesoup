<?php
include_once('db.php');

	$id=$_GET['recipe'];
	if(!empty($id))
{
	$ola=mysqli_query($db, "DELETE FROM recipe WHERE id='$id'")or die(mysqli_error);
	echo '<script>alert("Recipe Deleted");';
   echo 'window.location= "home.php";</script>';
 }
	
	?>