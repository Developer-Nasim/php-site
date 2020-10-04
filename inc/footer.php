<div class="footersection templete clear">
	  <div class="footermenu clear">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">Privacy</a></li>
		</ul>
	  </div>


	  <?php
		$sql 	= "SELECT * FROM title_slogan_copy where id = '1'";
		$query	= $con->select($sql);
		if ($query) {
			while ($cat  = $query->fetch_assoc()) { ?>  
			<p><?php echo $cat['copyright']?></p>
		<?php }}?> 


	</div>

	<?php
		$sql 	= "SELECT * FROM social where id = '1'";
		$query	= $con->select($sql);
		if ($query) {
			while ($cat  = $query->fetch_assoc()) { ?> 
		 
			<div class="fixedicon clear">
				<a href="<?php echo $cat['fb']?>"><img src="images/fb.png" alt="Facebook"/></a>
				<a href="<?php echo $cat['tw']?>"><img src="images/tw.png" alt="Twitter"/></a> 
				<a href="<?php echo $cat['lk']?>"><img src="images/in.png" alt="LinkedIn"/></a>
			</div>

	<?php }}?>  



</body>
</html>