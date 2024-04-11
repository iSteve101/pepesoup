<?php 
include_once('header.php');?>
<?php 
include_once('dashboard.php');?>


    
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <h1 class="app-page-title">Overview</h1>
			    
			    <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
				    <div class="inner">
					    <div class="app-card-body p-3 p-lg-4">
						    <h3 class="mb-3">Welcome, <?php echo $_SESSION['name'];?>!</h3>
				
</div><!--//app-card-body-->
					    
				    </div><!--//inner-->
			    </div><!--//app-card-->


			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	   
<?php 
include_once('footer.php');?>