<?php 
include_once('header.php');?>
<?php 
include_once('dashboard.php');?>

  
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">			    
			    <h1 class="app-page-title">Edit Profile</h1>
			    <hr class="mb-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-4">
		                <h3 class="section-title">Update Profile</h3>
		               </div>
	                <div class="col-12 col-md-8">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
							    <form class="settings-form" action="" method="post"  >
								<?php include ('db.php');
										$user=$_SESSION['username'];
									$school= mysqli_query($db, "SELECT * FROM users WHERE username='$user'");
				while($row=mysqli_fetch_array($school)){
					?>
								    <div class="mb-3">
									    <label  class="form-label">Name<span class="ms-2" >
<input type="hidden" class="form-control" name="id" value="<?php echo $id;?>"/>
									    <input type="text" class="form-control" id="setting-input-1" value="<?php echo $row['name']; ?>" required  name="name" >
									</div>
									<div class="mb-3">
									    <label for="setting-input-2" class="form-label">Username</label>
										  <input type="text" class="form-control" id="setting-input-1" name="username" value="<?php echo $row['username']; ?>" required  >
								
									</div>
								    <div class="mb-3">
									    <label for="setting-input-3" class="form-label">Email</label>
 <input type="text" class="form-control" id="setting-input-1" name="email" value="<?php echo $row['email']; ?>" required  >
								</div>
								<div class="mb-3">
									    <label for="setting-input-3" class="form-label">Role</label>
										<select name="role" class="form-control" id="setting-input-1">
				<option><?php echo $row['role']; }?></option>
				<option>Chef</option>
				<option>Culinary Enthusiast</option>
				<option>Other</option>
				
				</select>
								</div>
									<button type="submit" name="submit" class="btn app-btn-primary" >Update</button>
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
if (isset($_POST['submit'])){
	$id=$_POST['id'];
	$name=$_POST['name'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$role=$_POST['role'];
	
	$date=date('d/m/Y');
		  	$sql=mysqli_query($db, "UPDATE users SET name='$name', username='$username', email='$email', role='$role' WHERE id='$id'")or die(mysqli_error);
echo '<script>alert("Infomation updated");';
   echo 'window.location= "home.php";</script>';
}
	
	?>