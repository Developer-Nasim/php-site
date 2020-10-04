<?php include "inc/header.php";?>
<?php include "inc/slider.php";?> 

	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
        <?php
            if (!isset($_GET['cat_id']) || $_GET['cat_id'] == NULL) {
                 header('location: 404.php');
            }else{
                $cats = $_GET['cat_id'];
            }
        
        ?>
		<?php
            $sql 	= "SELECT * FROM post where category = '$cats'";
            $catPost	= $con->select($sql);
            if ($catPost) {
			    while ($spost  = $catPost->fetch_assoc()) { ?>   
				<div class="samepost clear">
					<h2><a href="post.php?postid=<?php echo $spost['id']?>"><?php echo $spost['title']?></a></h2>
					<h4><?php echo $fm->time($spost['time']);?>, By <a href="#"><?php echo $spost['author']?></a></h4>
					<a href="post.php?postid=<?php echo $spost['id']?>"><img src="admin/upload/<?php echo $spost['image']?>" alt="post image"/></a>
					<p> <?php echo $fm->txtshort($spost['content'], 200)?> </p>
					<div class="readmore clear">
						<a href="post.php?postid=<?php echo $spost['id']?>">Read More</a>
					</div>
				</div>
			  <?php }}else {
                  echo "Sorry here is not adding data";
              }?>  
		</div>
		<?php include "inc/sidebar.php";?>
	</div>


<?php include "inc/footer.php";?>