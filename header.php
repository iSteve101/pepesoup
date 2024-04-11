<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['name']))
{
echo '<script>alert("Log In First");';
   echo 'window.location= "login.php";</script>';
}
?>
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