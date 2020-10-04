<?php include "inc/header.php";?>

        <div class="grid_10"> 
            <div class="box round first grid">
                <h2>Update Social Media</h2>
                <div class="block">    




                <?php

                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        $linkedin       = $_POST['facebook'];
                        $twitter        = $_POST['twitter'];
                        $linkedin       = $_POST['linkedin']; 

                        $sql  = "INSERT INTO social(fb,tw,lk) VALUES('$linkedin','$twitter','$linkedin')";
                        $query= $con->insert($sql);

                        			

                    }

                ?>


                 <form action="" method="POST">
                    <table class="form">					
                        <tr>
                            <td>
                                <label>Facebook</label>
                            </td>
                            <td>
                                <input type="text" name="facebook" placeholder="Facebook link.." class="medium" />
                            </td>
                        </tr>
						 <tr>
                            <td>
                                <label>Twitter</label>
                            </td>
                            <td>
                                <input type="text" name="twitter" placeholder="Twitter link.." class="medium" />
                            </td>
                        </tr>
						
						 <tr>
                            <td>
                                <label>LinkedIn</label>
                            </td>
                            <td>
                                <input type="text" name="linkedin" placeholder="LinkedIn link.." class="medium" />
                            </td>
                        </tr>
						 
						 <tr>
                            <td></td>
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