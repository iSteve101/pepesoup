<?php 
include_once('header.php');?>
<?php 
include_once('dashboard.php');?>

  
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">			    
			    <h1 class="app-page-title">Change Password</h1>
			    <hr class="mb-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-4">
		                <h3 class="section-title">Change Password</h3>
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
									    <label  class="form-label">Old Password<span class="ms-2" >
										<input type="hidden" value="<?php echo $row['id']; ?>" name="id" />
												<input type="hidden" value="<?php echo $row['password']; ?>" name="password" />
									    <input type="password" class="form-control" id="setting-input-1"  required   name="opassword">
									</div>
									<div class="mb-3">
									    <label for="setting-input-2" class="form-label">New Password</label>
										  <input type="password" class="form-control" id="setting-input-1" name="newpassword" required  >
								
									</div>
								    <div class="mb-3">
									    <label for="setting-input-3" class="form-label">Retype New Password</label>
 <input type="password" class="form-control" id="setting-input-1" name="snewpassword" required  >
								</div>
								<?php }?>
									<button type="submit" name="submit" class="btn app-btn-primary" >Change</button>
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
	$password=$_POST['password'];
	$opassword=$_POST['opassword'];
	$newpassword=$_POST['newpassword'];
	$snewpassword=$_POST['snewpassword'];
	
	$date=date('d/m/Y');
	if ($password == $opassword ){
		  	$sql=mysqli_query($db, "UPDATE users SET password='$newpassword' WHERE id='$id'")or die(mysqli_error);
echo '<script>alert("Password updated");';
   echo 'window.location= "home.php";</script>';
}
else {
	echo '<script>alert("incorrect Password ");';
   echo 'window.location= "changepassword.php";</script>';
}
}	
	?>