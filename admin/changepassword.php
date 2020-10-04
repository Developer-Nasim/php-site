<?php include "inc/header.php";?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Change Password</h2>
                <div class="block"> 


                    <?php


                     $q = "SELECT * from usrs";
                     $qd= $con->select($q);
                     $dt = $qd->fetch_assoc();
                     $f =  $dt['password'];  
                        if ($_SERVER['REQUEST_METHOD'] == "POST") {
                            $oldpass   = md5($_POST['oldpass']);
                            $newpss    = md5($_POST['newpss']);
                            $email     = $_POST['email'];
   
                            if ($oldpass === $f) {
                                $ut = "UPDATE usrs set password = '$newpss' where email = '$email'";
                                $qs = $con->insert($ut);
                                echo "Your password update succesfull";
                            } 
                        }
                    
                    ?>

                    <form action = "" method="POST">
                        <table class="form">					
                            <tr>
                                <td>
                                    <label>Email</label>
                                </td>
                                <td>
                                    <input type="text" placeholder="Enter email..."  name="email" class="medium" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Old Password</label>
                                </td>
                                <td>
                                    <input type="password" placeholder="Enter Old Password..."  name="oldpass" class="medium" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>New Password</label>
                                </td>
                                <td>
                                    <input type="password" placeholder="Enter New Password..." name="newpss" class="medium" />
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