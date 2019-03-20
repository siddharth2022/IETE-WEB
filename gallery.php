<?php

    $title = 'Gallery';

    if(!isset($_GET['eid'])){
        header('location: index.php');
    }

    include 'header.php';
    include "connect.php";

    $eid = $_GET['eid'];
    if(!$resultset = $database_handler->query("SELECT * FROM events where id =".$eid." ;"))
die("Query error");

$row = $resultset->fetch_assoc();
?>

    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
    <!-- ##### Archive Grid Posts Area Start ##### -->
    <div class="vizew-grid-posts-area mb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <!-- Archive Catagory & View Options -->
                    <div class="archive-catagory-view mb-50 d-flex align-items-center justify-content-between">
                        <!-- Catagory -->
                        <div class="archive-catagory">
                            <h4><?php echo $row['event_name']; ?></h4>
                        </div>
                    </div>

                    <div class="row">
                        
<?php
        for($i=0; $i<$row['image']; $i++){
?>

                        <div class="col-12 col-md-6">
                            <div class="single-post-area mb-50">
                                <div class="post-thumbnail">
                                    <img src="img/images/<?php echo $row['folder'];?>/<?php echo $i; ?>.jpg">
                                </div>
                            </div>
                        </div>

            <?php
        }
            ?>

                
                    </div>
                </div>

                
            </div>
        </div>
    </div>

    <?php
        include 'footer.php';
    ?>