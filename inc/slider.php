<div class="slidersection templete clear">
        <div id="slider">

            <?php
                $sql 	= "SELECT * FROM slider";
                $query	= $con->select($sql);
                if ($query) {
                    while ($cat  = $query->fetch_assoc()) { ?> 
                <a href="#"><img style="width:100%;height:500px" src="admin/upload/<?php echo $cat['image']?>" alt="<?php echo $cat['image']?>" title="<?php echo $cat['caption']?>" /></a>
			<?php }}?>  

        </div> 
	</div>