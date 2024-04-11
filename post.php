<?php 
include_once('header.php');?>
<?php 
include_once('dashboard.php');?>

  
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">			    
			    <h1 class="app-page-title">New Recipe</h1>
			    <hr class="mb-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-4">
		                <h3 class="section-title">Post New Recipe</h3>
		               </div>
	                <div class="col-12 col-md-8">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
							    <form class="settings-form" action="" method="post" enctype="multipart/form-data">
								    <div class="mb-3">
									    <label  class="form-label">Title<span class="ms-2" >
										
									    <input type="text" class="form-control" id="setting-input-1" placeholder="Title" required  name="name" >
									</div>
									<div class="mb-3">
									    <label for="setting-input-2" class="form-label">About</label>
										<textarea name="note" style=" width:100% " class="form-control" id="setting-input-2">
							
							</textarea>
									</div>
								    <div class="mb-3">
									    <label for="setting-input-3" class="form-label">Photo</label>
										<input type="file" class="form-control" required name="file" />
									</div>
									<button type="submit" name="save" class="btn app-btn-primary" >Post</button>
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
	
	$date=date('d/m/Y');
	move_uploaded_file($_FILES["file"]["tmp_name"],
      "img/" . $_FILES["file"]["name"]);
      $img="img/" . $_FILES["file"]["name"];
	  	$sql="INSERT INTO recipe(title, about, pics, date, comment) 
	 VALUES('$title', '$note', '$img', '$date', '0')";
mysqli_query($db,$sql);
echo '<script>alert("Recipe Posted");';
   echo 'window.location= "home.php";</script>';
}
	
	?>