<?php include "inc/header.php";?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New User</h2>
                <div class="block">            
                
                    <?php   

                        $msg  = "";

                        if ($_SERVER['REQUEST_METHOD'] == "POST") {
                            $name        = $fm->validation($_POST['name']);
                            $email       = $fm->validation($_POST['email']);
                            $details     = $fm->validation($_POST['details']);
                            $password    = $fm->validation(md5($_POST['password'])); 
                            $post_image     = $_FILES['file']['name'];
                            $tmp_image      = $_FILES['file']['tmp_name']; 
                            
                            move_uploaded_file($tmp_image, 'upload/'.$post_image);
                                
                            if ($name == "" || $email == "" || $details == "" || $post_image == "" || $password == "") {
                                $msg = "<b style='color:red'>Filed must not be empty..!</b>";
                            }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                $msg = "<b style='color:red'>Give a valida E-mail address please..</b>";
                            }else {
                               
                                $sql  = "INSERT INTO usrs(username,email,details,image,password) VALUES('$name','$email','$details','$post_image','$password')";
                                $query= $con->insert($sql);
 
                                    $msg = "<b style='color:green'>User added...!</b>";
                               
                            }


                        }

                    ?>   
                    <form action="" method="post" enctype="multipart/form-data">
                    <?php echo $msg;?>
                        <table class="form"> 
                            <tr>
                                <td>
                                    <label>User name</label>
                                </td>
                                <td>
                                    <input type="text" name="name" placeholder="Enter User name..." class="medium" />
                                </td>
                            </tr> 
                            <tr>
                                <td>
                                    <label>Email</label>
                                </td>
                                <td>
                                    <input type="text" name="email">
                                </td>
                            </tr>   
                            <tr>
                                <td style="vertical-align: top; padding-top: 9px;">
                                    <label>Details</label>
                                </td>
                                <td>
                                    <textarea name="details"></textarea>
                                </td>
                            </tr> 
                            <tr>
                                <td style="vertical-align: top; padding-top: 9px;">
                                    <label>User Images</label>
                                </td>
                                <td>
                                    <input type="file" name="file">
                                </td>
                            </tr> 
                            <tr>
                                <td>
                                    <label>Password</label>
                                </td>
                                <td>
                                    <input type="password" name="password">
                                </td>
                            </tr>  
                            <tr>
                                <td></td>
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