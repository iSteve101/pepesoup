<?php session_start();?>
<!DOCTYPE html>
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

<body class="app app-login p-0">    	
    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-12 col-lg-12 auth-main-col text-center p-12">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">	
				    <h2 class="auth-heading text-center mb-5">Login</h2>
			        <div class="auth-form-container text-start">
						<form class="auth-form login-form" action=" " method="post" >         
							<div class="email mb-3">
								<label class="sr-only" for="signin-email">Username</label>
								<input    type="text" class="form-control signin-email" placeholder="Username" name="username" required>
							</div><!--//form-group-->
							<div class="password mb-3">
								<label class="sr-only" for="signin-password">Password</label>
								<input id="signin-password"   type="password" class="form-control signin-password" placeholder="Password" name="password" required>
								<div class="extra mt-3 row justify-content-between">
									<div class="col-6">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="RememberPassword">
											<label class="form-check-label" for="RememberPassword">
											Remember me
											</label>
										</div>
									</div><!--//col-6-->
									<div class="col-6">
										<div class="forgot-password text-end">
											<a href="resetpassword.php">Forgot password?</a>
										</div>
									</div><!--//col-6-->
								</div><!--//extra-->
							</div><!--//form-group-->
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto" name="login" >Log In</button>
							</div>
						</form>
						
<?php 
include('db.php');

if(isset ($_POST['login']))
{
	$user=$_POST['username'];
	$pass=$_POST['password'];


if (!empty($user) && !empty ($pass)){

$querylogin=mysqli_query($db, "SELECT * FROM users WHERE username='$user' AND password='$pass'")or die(mysqli_error);}
if(mysqli_num_rows($querylogin))
{
$row=mysqli_fetch_array($querylogin);
$_SESSION['name']=$row['name'];
$_SESSION['username']=$row['username'];
$_SESSION['email']=$row['email'];
$status=$row['status'];


if($status=='Active'){
	echo '<script>alert("Welcome '.$_SESSION['name'].', always Remember to Log-Out");';
   echo 'window.location= "home.php";</script>';
}

}
else
{
echo '<center><b style="color:red;"><h3>Invalid User Details</h3></b></center>';
}}

?>
						
						<div class="auth-option text-center pt-5">No Account? Sign up <a class="text-link" href="signup.php" >here</a>.</div>
					</div><!--//auth-form-container-->	

			    </div><!--//auth-body-->
		    
			     
		    </div><!--//flex-column-->   
	    </div><!--//auth-main-col-->
	     
    
    </div><!--//row-->


</body>
</html> 

