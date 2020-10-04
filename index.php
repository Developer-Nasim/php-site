<?php include "inc/header.php";?>
<?php include "inc/slider.php";?> 

	<div class="contentsection contemplete clear">
		<div class="maincontent clear">

		<?php
            $sql 	= "SELECT * FROM post order by rand()";
            $post	= $con->select($sql);
            if ($post) {
			    while ($spost  = $post->fetch_assoc()) { ?>   
				<div class="samepost clear">
					<h2><a href="post.php?postid=<?php echo $spost['id']?>"><?php echo $spost['title']?></a></h2>
					<h4><?php echo $fm->time($spost['time']);?>, By <a href="#"><?php echo $spost['author']?></a></h4>
					<a href="post.php?postid=<?php echo $spost['id']?>"><img src="admin/upload/<?php echo $spost['image']?>" alt="post image"/></a>
					<p> <?php echo $fm->txtshort($spost['content'], 200)?> </p>
					<div class="readmore clear">
						<a href="post.php?postid=<?php echo $spost['id']?>">Read More</a>
					</div>
				</div>
			  <?php }?>  

					<!-- pagination -->
					<?php echo "<span class='pagination'><a href='index.php?page=1'>".First or."</a>";?>
						1,2,3
					<?php echo "<a href='index.php?page=1'></a>".Last or."</span>";?>
					<!-- pagination -->
					
			  <?php }?>  
		</div>
		<?php include "inc/sidebar.php";?>
	</div>


<?php include "inc/footer.php";?>