<?php include "inc/header.php";?>


        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New Category</h2>

 
                <?php

                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        $cat_name       = $_POST['catname']; 

                        $sql  = "INSERT INTO post_category(name) VALUES('$cat_name')";
                        $query= $con->insert($sql);

                                    

                    }

                ?> 


               <div class="block copyblock"> 
                <form action="" method="POST">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="catname" placeholder="Enter Category Name..." class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
 
<?php include "inc/footer.php";?>