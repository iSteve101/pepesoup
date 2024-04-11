<?php session_start();?><!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Steve Recipe</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="dashboard/assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="dashboard/assets/css/portal.css">

</head> 

<body class="app app-signup p-0">    	
    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-12 col-lg-12 auth-main-col text-center p-12">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">	
				    <h2 class="auth-heading text-center mb-4">Sign-up </h2>					
	
					<div class="auth-form-container text-start mx-auto">
						<form class="auth-form auth-signup-form" action=" " method="post">         
							<div class="email mb-3">
								<label class="sr-only" for="signup-email">Your Name</label>
								<input id="signup-name"  type="text" class="form-control signup-name" placeholder="Full name" required="required" name="name">
							</div>
							<div class="email mb-3">
								<label class="sr-only" for="signup-email">Username</label>
								<input type="text" class="form-control signup-email" placeholder="Username" required="required"name="username">
							</div>
							<div class="email mb-3">
								<label class="sr-only" for="signup-email">Your Email</label>
								<input  type="email" class="form-control signup-email" placeholder="Email" required="required" name="email">
							</div>
							
							 <div class="email mb-3">
							 <label class="sr-only" for="signup-email">Section</label>
                                    <select class="form-control" class="form-control signup-email" id="signup-email" id="contact-name" name="post">
									<option></option>
									<option>Chef</option>
									<option>Culinary Enthusiast</option>
									<option>Other</option>
									
									</select>  </div>
							
							<div class="password mb-3">
								<label class="sr-only" for="signup-password">Password</label>
								<input  type="password" name="password" class="form-control signup-password" placeholder="Create a password" required="required">
							</div>
							
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto" name="submit">Sign Up</button>
							</div>
						</form><!--//auth-form-->
						
						<div class="auth-option text-center pt-5">Already have an account? <a class="text-link" href="login.php" >Log in</a></div>
					</div><!--//auth-form-container-->	
					
					
				    
			    </div><!--//auth-body-->
		    
			   <!--//app-auth-footer-->	
		    </div><!--//flex-column-->   
	    </div><!--//auth-main-col-->
	   
    </div><!--//row-->


</body>
</html> 
<?php

	include_once('db.php');
	if(isset($_POST['submit'])){{
		$name=$_POST['name'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$post=$_POST['post'];
		$email=$_POST['email'];
		}
	
		
	$sql="INSERT INTO users(name, username, password, email, role, status)VALUES
	('$name', '$username', '$password', '$email', '$post', 'Active' )";
mysqli_query($db, $sql);
echo '<script>alert("Welcome");';
echo 'window.location= "home.php";</script>'; 
	}
	?>
	


