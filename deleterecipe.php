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
			    
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Delete Recipes Posted</h1>
				    </div>
			    </div><!--//row-->
			   
				<div class="tab-content" id="orders-table-tab-content">
			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table shadow-sm mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
							        <table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr>

												<th class="cell">Title</th>
												<th class="cell">Note</th>
												<th class="cell">Picture</th>
												<th class="cell">Date</th>
											</tr>
										</thead>
										<tbody>
										<?php include ('db.php');
									$school= mysqli_query($db, "SELECT * FROM recipe");
				while($row=mysqli_fetch_array($school)){
					?>
											<tr>
												<td class="cell"><a href="deleterecipee.php?recipe=<?php echo $row['id']; ?>"> <?php echo $row['title']; ?></a></td>
												<td class="cell"><?php echo $row['about']; ?></td>
												<td class="cell"><center><img class="main-logo" src="<?php echo $row['pics']; ?>" alt=""  width="10%"/></center></td>
												<td class="cell"><?php echo $row['date']; ?></td>
											</tr>
											
					<?php }?>
										</tbody>
									</table>
						        </div><!--//table-responsive-->
						       
						    </div><!--//app-card-body-->		
						</div><!--//app-card-->
						
			        </div><!--//tab-pane-->
			        
		
		
				</div><!--//tab-content-->
				
				
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	    

	    
    </div><!--//app-wrapper--> 
