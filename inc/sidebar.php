<div class="sidebar clear">
			<div class="samesidebar clear">
				<h2>Categories</h2>
					<ul>
					<?php
						$sql 	= "SELECT * FROM post_category";
						$query	= $con->select($sql);
						if ($query) {
							while ($cat  = $query->fetch_assoc()) {
						 
						?>
						<li><a href="cat_post.php?cat_id=<?php echo $cat['id']?>"><?php echo $cat['name']?></a></li>
					<?php }}?>
						 					
					</ul>
			</div>
			
			<div class="samesidebar clear">
				<h2>Latest articles</h2>
					<?php
						$sql 	= "SELECT * FROM post order by id desc";
						$query	= $con->select($sql);
						if ($query) {
							while ($cat  = $query->fetch_assoc()) {
						 
						?> 
					
						<div class="popular clear">
							<h3><a href="post.php?postid=<?php echo $cat['id']?>"><?php echo $cat['title']?></a></h3>
							<a href="#"><img src="admin/upload/<?php echo $cat['image']?>" alt="<?php echo $cat['image']?>"/></a>
							<p><?php echo $fm->txtshort($cat['content'], 50)?></p>	
						</div>

					<?php }}else{echo "Sorry here are not any Post";}?>
				 
			</div>
			
		</div>