<?php

    include_once "../lib/session.php";
    Sesison::checkSession();
	include_once "../config/config.php";
	include_once "../lib/Database.php";
    include_once "../helpers/formate.php";
     
	$con    = new con();
    $fm     = new formate();
   

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title> <?php echo $fm->title();?> || DEVS_GROUP</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />
    <link href="css/table/demo_page.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN: load jquery -->
    <script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.sortable.min.js" type="text/javascript"></script>
    <script src="js/table/jquery.dataTables.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <script type="text/javascript" src="js/table/table.js"></script>
    <script src="js/setup.js" type="text/javascript"></script>
	 <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
		    setSidebarHeight();
        });
    </script>

</head>
<body>
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">

            <?php
                $sql 	= "SELECT * FROM title_slogan_copy where id = '1'";
                $query	= $con->select($sql);
                if ($query) {
                    while ($cat  = $query->fetch_assoc()) { ?> 
				 
                <div class="floatleft logo">
                    <img src="upload/<?php echo $cat['logo']?>" alt="<?php echo $cat['logo']?>"/>
				</div>
				<div class="floatleft middle">
					<h1><?php echo $cat['title']?></h1>
					<p><?php echo $cat['slogan']?></p>
				</div>
            <?php }}?>  

                <div class="floatright">
                    <div class="floatleft">
                        <img style="    
                            width: 50px;
                            border-radius: 50%;
                            height: 50px;
                            margin-top: -10px;
                            object-fit: cover;" 
                        src="upload/<?php echo Sesison::get('userImg');?>" alt="Profile Pic" /></div>
                    <div class="floatleft marginleft10">
                    <?php 
                            if (isset($_GET['action']) && $_GET['action'] == "logout") {
                                Sesison::destroy(); 
                            }
                        ?>

                        <ul class="inline-ul floatleft">
                            <li>Hello <?php echo Sesison::get('usernames');?></li>
                            <li><a href="?action=logout">Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
                <li class="ic-dashboard"><a href="index.php"><span>Dashboard</span></a> </li>
                <li class="ic-form-style"><a href=""><span>User Profile</span></a></li>
				<li class="ic-typography"><a href="changepassword.php"><span>Change Password</span></a></li>
				<li class="ic-grid-tables"><a href="inbox.php"><span>Inbox 
                <?php
                    $q = "SELECT * from contact";
                    $qd= $con->select($q);
                    $r = mysqli_num_rows($qd);
                    echo "$r";
                ?>
                
                
                </span></a></li>
                <li class="ic-charts"><a href="../index.php"><span>Visit Website</span></a></li>
            </ul>
        </div>
        <div class="clear">
        </div>

        <?php include "inc/sidebar.php";?>