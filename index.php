<?php 
include_once('indexheader.php');
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
                                    <a class="nav-link" href="#">Explore Recipe</a>
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

										
    <!-- ****** Welcome Post Area Start ****** -->
    <section class="welcome-post-sliders owl-carousel">
<?php include ('db.php');
									$school= mysqli_query($db, "SELECT * FROM recipe");
				while($row=mysqli_fetch_array($school)){
					?>
					
        <!-- Single Slide -->
        <div class="welcome-single-slide">
            <!-- Post Thumb -->
            <img src="<?php echo $row['pics']; ?>" alt="">
            <!-- Overlay Text -->
            <div class="project_title">
                <div class="post-date-commnents d-flex">
                  <a href="readmore.php?more=<?php echo $row['id']; ?>" ><?php echo $row['date']; ?></a>
                    <a href="readmore.php?more=<?php echo $row['id']; ?>" ><?php echo $row['comment']; ?> Comment</a>
                </div>
                <a href="readmore.php?more=<?php echo $row['id']; ?>" >
                    <h5><?php echo $row['title']; ?></h5>
                </a>
            </div>
        </div>
				<?php }?>


    </section>
    <!-- ****** Welcome Area End ****** -->

    <!-- ****** Categories Area Start ****** -->
    <section class="categories_area clearfix" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
                        <img src="img/catagory-img/1.jpg" alt="">
                
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".6s">
                        <img src="img/catagory-img/2.jpg" alt="">
                     
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".9s">
                        <img src="img/catagory-img/3.jpg" alt="">
                     
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Categories Area End ****** -->

    <!-- ****** Blog Area Start ****** -->
    <section class="blog_area section_padding_0_80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="row">

<?php 
									$school= mysqli_query($db, "SELECT * FROM recipe");
				while($row=mysqli_fetch_array($school)){
					?>
                        <!-- Single Post -->
                        <div class="col-12 col-md-6">
                            <div class="single-post wow fadeInUp" data-wow-delay=".4s">
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
                                              <a href="readmore.php?more=<?php echo $row['id']; ?>" ><i class="fa fa-comment-o" aria-hidden="true"></i> <?php echo $row['comment']; ?></a>
                                            </div>
                                            <!-- Post Share -->
                                            <div class="post-share">
                                                <a href="readmore.php?more=<?php echo $row['id']; ?>" ><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                   <a href="readmore.php?more=<?php echo $row['id']; ?>" >
                                        <h4 class="post-headline"><?php echo $row['title']; ?></h4>
                                    </a>
                                </div>
                            </div>
                        </div>
				<?php }?>
				<?php 
									$school= mysqli_query($db, "SELECT * FROM recipe ORDER by id ASC");
				while($row=mysqli_fetch_array($school)){
					?>
                        <!-- Single Post -->
                        <div class="col-12">
                            <div class="list-blog single-post d-sm-flex wow fadeInUpBig" data-wow-delay=".4s">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <img src="<?php echo $row['pics']; ?>" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-meta d-flex">
                                        <div class="post-author-date-area d-flex">
                                            <!-- Post Author -->
                                            
                                            <!-- Post Date -->
                                            <div class="post-date">
                                                <a href="#"><?php echo $row['date']; ?></a>
                                            </div>
                                        </div>
                                        <!-- Post Comment & Share Area -->
                                        <div class="post-comment-share-area d-flex">
                                            <!-- Post Favourite -->
                                           
                                            <!-- Post Comments -->
                                            <div class="post-comments">
                                                <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> <?php echo $row['comment']; ?></a>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <a href="#">
                                        <h4 class="post-headline"><?php echo $row['title']; ?></h4>
                                    </a>
                                    <p><?php echo $row['about']; ?></p>
                                    <a href="readmore.php?more=<?php echo $row['id']; ?>" class="read-more">Continue Reading..</a>
                                </div>
                            </div>
                        </div>
				<?php }?>

                    </div>
                </div>

                <!-- ****** Blog Sidebar ****** -->
                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="blog-sidebar mt-5 mt-lg-0">
                        <!-- Single Widget Area -->
                       
                    


                        <!-- Single Widget Area -->
                        <div class="single-widget-area newsletter-widget">
                            <div class="widget-title text-center">
                                <h6>Newsletter</h6>
                            </div>
                            <p>Subscribe to our newsletter,get notification about new updates, information discount, etc.</p>
                            <div class="newsletter-form">
                                <form action="#" method="post">
                                    <input type="email" name="newsletter-email" id="email" placeholder="Your email">
                                    <button type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Blog Area End ****** -->


    <!-- ****** Our Creative Portfolio Area End ****** -->



 <?php 
include_once('indexfooter.php');
 ?>