<?php include "inc/header.php";?>


        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New Slider</h2>

 
                <?php
                        $msg = "";
                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        $caption        = $_POST['caption'];  
                        $post_image     = $_FILES['file']['name'];
                        $tmp_image      = $_FILES['file']['tmp_name']; 
                            
                        if ($caption == "" || $post_image == "") {
                            $msg = "<b style='color:red'>Filed must not be empty..!</b>";
                        }else { 
                            move_uploaded_file($tmp_image, 'upload/'.$post_image);
                            $sql  = "INSERT INTO `slider`(`image`,`caption`) VALUES('$post_image','$caption')";
                            $query= $con->insert($sql);
                            $msg = "<b style='color:green'>Slider added..!</b>";
                        }
                                    

                    }

                ?> 


               <div class="block copyblock"> 
                <form action="" method="POST" enctype="multipart/form-data">
                 <?php echo $msg?>
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="caption" placeholder="Enter Slider cation..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="file" name="file" class="medium" />
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