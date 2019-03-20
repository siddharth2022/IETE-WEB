<?php
$title="IETE | Home Page";
include "header.php";
include "connect.php";
?>
    <!-- ##### Hero Area Start ##### -->
    
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Trending Posts Area Start ##### -->
    
    <!-- ##### Vizew Post Area Start ##### -->
    
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
    <section class="vizew-post-area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="all-posts-area">
                        <!-- Section Heading -->
                        <!-- Featured Post Slides -->
                        <div class="featured-post-slides owl-carousel mb-30">
                            <!-- Single Feature Post -->
                            <div class="single-feature-post video-post bg-img" style="background-image: url(img/images/salesforce_2019/0.jpg);">
                                <!-- Play Button -->
                                

                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">Heading 1</a>
                                </div>
                            </div>

                            <!-- Single Feature Post -->
                            <div class="single-feature-post video-post bg-img" style="background-image: url(img/images/salesforce_2019/1.jpg);">
                                

                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">Heading 2</a>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-12 col-md-5 col-lg-4">
                    <div class="sidebar-area">



                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget latest-video-widget mb-50">
                            <!-- Section Heading -->
                            <div class="section-heading style-2 mb-30">
                                <h4>Upcoming Events</h4>
                                <div class="line"></div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-post-area mb-30">
                                <!-- Post Thumbnail -->

                                <?php
                                    if(!$resultset = $database_handler->query("SELECT * FROM events order by Date;"))
                                    die("Query error");
                                    
                                    while($row = $resultset->fetch_assoc())
                                                 {
                                                   
                                                    if($row['Date'] > (date('Y-m-d')))
                                    {
                                ?>

                                <div class="post-thumbnail">
                                    <a href="event.php?eid=<?php echo $row['id']; ?>">

                                        <img src="img/images/<?php echo $row['folder'];?>/0.jpg">
                                        <h2>
                                            <span style="color:white;font-size:1.8rem;"><b><?php echo $row['event_name']; ?></b></span>
                                        </h2>
                                    </a>
                                </div>

                                <?php
                                    }}
                                ?>
                            </div>

                            
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Vizew Psot Area End ##### -->

    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>