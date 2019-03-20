<?php

    $title = "IETE | Events";
    
    if(!isset($_GET['eid'])){
        header('location: index.php');
    }

    include "header.php";
    include "connect.php";

    $eid = $_GET['eid'];
    if(!$resultset = $database_handler->query("SELECT * FROM events where id =".$eid." ;"))
die("Query error");

$row = $resultset->fetch_assoc();

$time=strtotime($row['Date']);
$month=date("F",$time);
$year=date("Y",$time);
$day=date("d",$time);

?>

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-details-area mb-80">
        <div class="container">
            <div class="row">&nbsp;</div>
            <div class="row">&nbsp;</div>
            <div class="row">&nbsp;</div>
            <div class="row">
                <div class="col-12">        
                    <div class="post-details-thumb mb-50">
                        <img src="./img/images/<?php echo $row['folder'] ?>/0.jpg">
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-8 col-xl-7">
                    <div class="post-details-content">
                        <!-- Blog Content -->
                        <div class="blog-content">

                            <!-- Post Content -->
                            <div class="post-content mt-0">

                                <a href="single-post.html" class="post-title mb-2"><?php echo $row['event_name']; ?></a>

                                <div class="d-flex justify-content-between mb-30">
                                    <div class="post-meta d-flex align-items-center">
                                        <a href="#" class="post-date"><?php echo $day . ' ' . $month . ', ' . $year ; ?></a>
                                    </div>
                                </div>
                            </div>

                            <?php echo $row['description']; ?>

                            <div class="row">&nbsp;</div>                    
                            <div class="row">&nbsp;</div>                    

                            <h4>Student Coordinators</h4>

                            <?php echo $row['student_coor']; ?>
                            
                            <hr>
                            <h4>Faculty Coordinators</h4>

                            <?php echo $row['faculty_coor']; ?>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->

   <?php
        include 'footer.php';
   ?>