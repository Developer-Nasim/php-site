<?php

	include_once "config/config.php";
	include_once "lib/Database.php";
	include_once "helpers/formate.php";
	
	$con = new con();
	$fm = new formate();

?>

<!DOCTYPE html>
<html>
<head>
<?php

	if (isset($_GET['postid'])) {
		$ptid = $_GET['postid'];
	}

?>
	<title> <?php echo $fm->title();?> || DEVS_GROUP</title>
	<meta name="language" content="English">
	<meta name="description" content=" ">
	<meta name="keywords" content=" ">
	<meta name="author" content="Delowar">
	<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">	
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="style.css">
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:500,
		pauseTime:5000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>
</head>

<body>
	<div class="headersection templete clear">
		<a href="#">
			<div class="logo">


			<?php
                $sql 	= "SELECT * FROM title_slogan_copy where id = '1'";
                $query	= $con->select($sql);
                if ($query) {
                    while ($cat  = $query->fetch_assoc()) { ?> 
				<img src="admin/upload/<?php echo $cat['logo']?>" alt="<?php echo $cat['logo']?>"/>
				<h2><?php echo $cat['title']?></h2>
				<p><?php echo $cat['slogan']?></p> 
			<?php }}?>  


			</div>
		</a>
		<div class="social clear">

			<?php
                $sql 	= "SELECT * FROM social where id = '1'";
                $query	= $con->select($sql);
                if ($query) {
                    while ($cat  = $query->fetch_assoc()) { ?> 
			  
					<div class="icon clear">
						<a href="<?php echo $cat['fb']?>" target="_blank"><i class="fa fa-facebook"></i></a>
						<a href="<?php echo $cat['tw']?>" target="_blank"><i class="fa fa-twitter"></i></a>
						<a href="<?php echo $cat['lk']?>" target="_blank"><i class="fa fa-linkedin"></i></a> 
					</div> 
			<?php }}?>  

			<div class="searchbtn clear">
				 
				<form action="search.php" method="get">
					<input type="text" name="keyword" placeholder="Search keyword..."/>
					<input type="submit" name="submit" value="Search"/>
				</form>
			</div>
		</div>
	</div>
	<div class="navsection templete">
	<?php 
		$title = $_SERVER['SCRIPT_FILENAME'];
		$current = basename($title, '.php');
	?>
		<ul>
			<li><a  <?php
				if ($current == 'index') {
					echo 'id="active"';
				} ?>
			 href="index.php">Home</a></li>
			<li><a   <?php
				if ($current == 'about') {
					echo 'id="active"';
				} ?> href="about.php">About</a></li>	
			<li><a  <?php
				if ($current == 'contact') {
					echo 'id="active"';
				} ?> href="contact.php">Contact</a></li>
		</ul>
	</div>