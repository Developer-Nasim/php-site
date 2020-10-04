<?php include "inc/header.php";?>
<?php include "inc/slider.php";?> 

	<div class="contentsection contemplete clear">
		<div class="maincontent clear">

        <?php 

            if (!isset($_GET['keyword']) || $_GET['keyword'] == NULL) {
                header('location: 404.php');
            }else {
                $GetSearch_id = $_GET['keyword'];
            }
        
        ?>

		<?php
            $sql 	= "SELECT * FROM post where title LIKE '%$GetSearch_id%' or  tags like '%$GetSearch_id%'";
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
			  <?php }}else{echo "Sorry Here is no any data";}?>  
		</div> 
	</div>


<?php include "inc/footer.php";?>