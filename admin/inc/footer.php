<div class="clear">
    </div>
	<script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            $('.datatable').dataTable();
			setSidebarHeight();
        });
    </script>
    <div id="site_info">

        <?php
            $sql 	= "SELECT * FROM title_slogan_copy where id = '1'";
            $query	= $con->select($sql);
            if ($query) {
			    while ($cat  = $query->fetch_assoc()) { ?>  
			<p><?php echo $cat['copyright']?>  All Rights Reserved. </p>
        <?php }}?> 

        
    </div>
	   
</body>
</html>
