<?php include "inc/header.php"?>
			<?php
				if (!isset($_GET['postid']) || $_GET['postid'] == NULL) {
					echo "<script>window.location = '404.php'</script>";
				}else {
					$post_id = $_GET['postid'];
				}

			?>
	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">	

			


			<?php
				$sql 	= "SELECT * FROM post where id = '$post_id'";
				$post	= $con->select($sql);
				if ($post) {
			    while ($spost  = $post->fetch_assoc()) { ?>    
					<h2><?php echo $spost['title']?></h2>
					<h4><?php echo $spost['time']?>, By <?php echo $spost['author']?></h4>
					<img src="admin/upload/<?php echo $spost['image']?>" alt="<?php echo $spost['image']?>"/>
					<p> <?php echo $spost['content']?> </p> 
 
			<?php }}?>  


				<div class="relatedpost clear">
					<h2>Related articles</h2>

					<?php
						$sql 			= "SELECT * FROM post where category = '$post_id'";
						$related_post	= $con->select($sql);
						if ($related_post) {
						while ($r_post  = $related_post->fetch_assoc()) { ?>     
						<a href="post.php?postid=<?php echo $r_post['id']?>"><img src="admin/upload/<?php echo $r_post['image']?>" alt="<?php echo $r_post['image']?>"/></a>
					<?php }}?>  
 
				</div>
		</div>

		</div>
		<?php include "inc/sidebar.php";?>
	</div>

	<?php include "inc/footer.php";?>