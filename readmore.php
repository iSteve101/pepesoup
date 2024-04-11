  

 <?php 
include_once('indexheader.php');
include_once('db.php');

 ?>

    <!-- ****** Header Area Start ****** -->
    <header class="header_area">
        <div class="container">
            <div class="row">
                <!-- Logo Area Start -->
                <div class="col-12">
                    <div class="logo_area text-center">
                        <a href="index.php" class="yummy-logo">Steve</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#yummyfood-nav" aria-controls="yummyfood-nav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button>
                        <!-- Menu Area Start -->
                        <div class="collapse navbar-collapse justify-content-center" id="yummyfood-nav">
                            <ul class="navbar-nav" id="yummy-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                
                               <li class="nav-item">
                                    <a class="nav-link" href="explorerecipe.php">Explore Recipe</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ****** Header Area End ****** -->
	
    <!-- ****** Single Blog Area Start ****** -->
    <section class="single_blog_area section_padding_80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="row no-gutters">

                      <?php 
					  $id=$_GET['more'];
					  $school= mysqli_query($db, "SELECT * FROM recipe WHERE id='$id'");
				while($row=mysqli_fetch_array($school)){
					  ?>

                        <!-- Single Post -->
                        <div class="col-10 col-sm-11">
                            <div class="single-post">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <img src="<?php echo $row['pics']; ?>" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-meta d-flex">
                                        <div class="post-author-date-area d-flex">
                                           
                                            <!-- Post Date -->
                                            <div class="post-date">
                                                <a href="#"><?php echo $row['date']; ?></a>
                                            </div>
                                        </div>
                                        <!-- Post Comment & Share Area -->
                                        <div class="post-comment-share-area d-flex">
                                           
                                            <!-- Post Comments -->
                                            <div class="post-comments">
                                                <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> <?php echo $row['comment']; ?></a>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <a href="#">
                                        <h2 class="post-headline"><?php echo $row['title']; ?></h2>
                                    </a>
                                   
                                    <p><?php echo $row['about']; ?></p>

                                </div>
                            </div>
				


                            <!-- Comment Area Start -->
                            <div class="comment_area section_padding_50 clearfix">
                                <h4 class="mb-30"><?php echo $row['comment']; ?> Comments</h4>

                                <ol><?php 
					  $schoo= mysqli_query($db, "SELECT * FROM comment WHERE cid='$id'");
				while($ro=mysqli_fetch_array($schoo)){
					  ?>
                                    <!-- Single Comment Area -->
                                    <li class="single_comment_area">
                                        <div class="comment-wrapper d-flex">
                                            <!-- Comment Meta -->
                                            <div class="comment-author">
                                                <img src="<?php echo $row['pics']; ?>" alt="">
                                            </div>
                                            <!-- Comment Content -->
                                            <div class="comment-content">
											

                                                <span class="comment-date text-muted"><?php echo $ro['date']; ?></span>
                                                <h5><?php echo $ro['name']; ?></h5>
                                                <p><?php echo $ro['comment']; ?></p>
                                                
                                            </div>
                                        </div>
                                        
                                    </li>
				<?php }?>
                                </ol>
                            </div>

                            <!-- Leave A Comment -->
                            <div class="leave-comment-area section_padding_50 clearfix">
                                <div class="comment-form">
                                    <h4 class="mb-30">Leave A Comment</h4>

                                    <!-- Comment Form -->
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="contact-name" name="name" placeholder="Name" required>
                                      <input type="hidden" class="form-control" id="contact-name" name="id" value="<?php echo $row['id']; ?>" required>
                                      <input type="hidden" class="form-control" id="contact-name" name="cno" value="<?php echo $row['comment']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="contact-email" name="email" placeholder="Email" required>
                                        </div>
                                       
                                        <div class="form-group">
                                            <textarea class="form-control" name="comment" id="message" cols="30" rows="10" placeholder="Message" required></textarea>
                                        </div>
                                        <button type="submit" class="btn contact-btn" name="save">Post Comment</button>
                                    </form>
                                </div>
                            </div>
<?php }?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
	
	<?php 
include_once('indexfooter.php');
 ?>
 <?php
include_once('db.php');
if (isset($_POST['save'])){
	$cid=$_POST['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$comment=$_POST['comment'];
	$cno=$_POST['cno'];
	$date=date('d/m/Y');
	$ncno=$cno+1;
	
	  	$sql="INSERT INTO comment(cid, name, email, comment, date, status) 
	 VALUES('$cid', '$name', '$email', '$comment', '$date', '$date')";
mysqli_query($db,$sql);
$sql=mysqli_query($db, "UPDATE recipe SET comment='$ncno' WHERE id='$cid'")or die(mysqli_error);
echo '<script>alert("comment Posted");';
   echo 'window.location= "index.php";</script>';
}
	
	?>