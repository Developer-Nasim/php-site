<?php include "inc/header.php";?>




        <?php

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $title         = $_POST['title'];
                $slogan        = $_POST['slogan'];
                $cptext        = $_POST['cptext'];
                $logo          = $_FILES['logo']['name'];
                $tmp_logo      = $_FILES['logo']['tmp_name']; 

                move_uploaded_file($tmp_logo, 'upload/'.$logo);

                $sql  = "INSERT INTO title_slogan_copy(title,slogan,logo,copyright) VALUES('$title','$slogan','$logo','$cptext')";
                $query= $con->insert($sql);



            }

        ?>












        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Site Title and Description</h2>
                <div class="block sloginblock">               
                 <form action="" method="POST" enctype="multipart/form-data">
                    <table class="form">					
                        <tr>
                            <td>
                                <label>Website Title</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Enter Website Title..."  name="title" class="medium" />
                            </td>
                        </tr>
						<tr>
                            <td>
                                <label>Website Slogan</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Enter Website Slogan..." name="slogan" class="medium" />
                            </td>
                        </tr>
						<tr>
                            <td>
                                <label>Website Logo</label>
                            </td>
                            <td>
                                <input type="file" name="logo" class="medium" />
                            </td>
                        </tr>
						<tr>
                            <td>
                                <label>Copyright Text</label>
                            </td>
                            <td>
                                <input type="text" name="cptext" class="medium" />
                            </td>
                        </tr>
						 
						
						 <tr>
                            <td>
                            </td>
                            <td>
                                <input type="submit" name="submit" Value="Update" />
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