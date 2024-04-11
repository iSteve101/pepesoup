<?php 
include_once('header.php');?>
<?php

{
$role=$_SESSION['role'];
if($role !="Chef")
{
echo '<script>alert("You must be a Chef to access this page ");';
   echo 'window.location= "home.php";</script>';
}}
?>
<?php 
include_once('dashboard.php');?>

  
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">			    
			    <h1 class="app-page-title">Edit Recipe</h1>
			    <hr class="mb-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-4">
		               </div>
	                <div class="col-12 col-md-8">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
							    <form class="settings-form" action="" method="post" enctype="multipart/form-data">
									<?php
	$id=$_GET['recipe'];
	?>
		<?php include ('db.php');
									$school= mysqli_query($db, "SELECT * FROM recipe WHERE id=$id");
				while($row=mysqli_fetch_array($school)){
					?>
								    <div class="mb-3">
									    <label  class="form-label">Title<span class="ms-2" >
										<input type="hidden" class="form-control" name="id" value="<?php echo $id;?>"/>
									    <input type="text" class="form-control" id="setting-input-1" placeholder="Title" required  name="name" value="<?php echo $row['title']; ?>">
									</div>
									<div class="mb-3">
									    <label for="setting-input-2" class="form-label">About</label>
										<textarea name="note" style=" width:100% " class="form-control" id="setting-input-2">
							<?php echo $row['about']; ?>
							</textarea>
									</div>
								    <div class="mb-3">
									    <label for="setting-input-3" class="form-label">Photo</label>
										<img class="main-logo" src="<?php echo $row['pics']; ?>" alt=""  width="20%"/><br>
										<input type="file" class="form-control" required name="file"  value="<?php echo $row['pics']; } ?>"/>
									</div>
									<button type="submit" name="save" class="btn app-btn-primary" >Update</button>
							    </form>
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>
                </div><!--//row-->
                
               
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
    </div>
<?php 
include_once('footer.php');?>
<?php
include_once('db.php');
if (isset($_POST['save'])){
	$title=$_POST['name'];
	$note=$_POST['note'];
	$id=$_POST['id'];
	
	$date=date('d/m/Y');
	move_uploaded_file($_FILES["file"]["tmp_name"],
      "img/" . $_FILES["file"]["name"]);
      $img="img/" . $_FILES["file"]["name"];
	  	$sql=mysqli_query($db, "UPDATE recipe SET title='$title', about='$note', pics='$img', date='$date' WHERE id='$id'")or die(mysqli_error);
echo '<script>alert("Recipe Edited");';
   echo 'window.location= "home.php";</script>';
}
	
	?>
