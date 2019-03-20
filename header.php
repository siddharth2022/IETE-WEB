<?php
include "connect.php";
if(!$resultset = $database_handler->query("SELECT * FROM events order by Date;"))
die("Query error");
// $row = $resultset->fetch_assoc();
// $time=strtotime($row['Date']);
// $month=date("F",$time);
// $year=date("Y",$time);
// $day=date("d",$time);
// echo $month;
// echo $year;
// echo $day;
//  while($row = $resultset->fetch_assoc())
// {}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title><?php if(isset($title)) echo $title; else echo "IETE";    ?></title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
    <!-- Preloader -->
    <!-- <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> -->

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        

        <!-- Navbar Area -->
        <div class="vizew-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">

                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="vizewNav">

                        <!-- Nav brand -->
                        <a href="index.php" style="padding:20px" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="index.php">Home</a></li>
                                    
                                    <li><a href="#">Events</a>
                                        <ul class="dropdown">
                                            <?php
                                            $t_year=1;
                                            $new=1;
                                            $first=1;
                                        while($row = $resultset->fetch_assoc())
                                                    {
                                                            $time=strtotime($row['Date']);
                                                            $month=date("F",$time);
                                                            $year=date("Y",$time);
                                                            $day=date("d",$time);
                                                        if($t_year!=$year){$t_year=$year;$new=1;}
                                                        else{$new=0;}
                                                            if($new==1){
                                                                if($first==0){
                                                                ?> 
                                                            
                                                        </ul></li> 
                                                                <?php  } $first=0; ?>
                                                                         
                                                                <li><a href="#"><?php echo $year; ?></a><ul class="dropdown"  type="square">
                                                                <li><a href="./event.php?eid=<?php echo $row['id']; ?>"><?php echo $row['event_name']; ?> </a></li>
                                                            <?php  }else {?>   
                                                            
                                                                <li><a href="./event.php?eid=<?php echo $row['id']; ?>"><?php echo $row['event_name']; ?> </a></li>
                                                            
                                                            <?php }} ?>     
                                                            </ul></li>
                                                            </ul></li>
                                            
                                      

                                    <li><a href="#">Gallery</a>
                                        <ul class="dropdown">
                                            <?php
                                            
                                        if(!$resultset = $database_handler->query("SELECT * FROM events order by Date;"))
                                            die("Query error");     
                                            $t_year=1;
                                            $new=1;
                                            $first=1;
                                        while($row = $resultset->fetch_assoc())
                                                    {
                                                            $time=strtotime($row['Date']);
                                                            $month=date("F",$time);
                                                            $year=date("Y",$time);
                                                            $day=date("d",$time);
                                                        if($t_year!=$year){$t_year=$year;$new=1;}
                                                        else{$new=0;}
                                                            if($new==1){
                                                                if($first==0){
                                                                ?> 
                                                            
                                                        </ul></li> 
                                                                <?php  } $first=0; ?>
                                                                         
                                                                <li><a href="#"><?php echo $year; ?></a><ul class="dropdown">
                                                                <li><a href="./gallery.php?eid=<?php echo $row['id']; ?>"><?php echo $row['event_name']; ?> </a></li>
                                                            <?php  }else {?>   
                                                            
                                                                <li><a href="./gallery.php?eid=<?php echo $row['id']; ?>"><?php echo $row['event_name']; ?> </a></li>
                                                            
                                                            <?php }} ?>     
                                                            </ul></li>
                                            
                                        </ul>
                                    </li>



                                    
                                    <li><a href="about.php">About Us</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->