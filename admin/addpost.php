<?php include "inc/header.php";?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New Post</h2>
                <div class="block">            
                
                    <?php

                        if ($_SERVER['REQUEST_METHOD'] == "POST") {
                            $title          = $_POST['title'];
                            $category       = $_POST['select']; 
                            $content        = $_POST['content'];
                            $tags           = $_POST['tags'];
                            $author         = Sesison::get('usernames');
                            $post_image     = $_FILES['file']['name'];
                            $tmp_image      = $_FILES['file']['tmp_name']; 

                            move_uploaded_file($tmp_image, 'upload/'.$post_image);
                            						
                            $sql  = "INSERT INTO post(title,content,image,author,category,tags) VALUES('$title','$content','$post_image','$author','$category','$tags')";
                            $query= $con->insert($sql);



                        }

                    ?>   
                    <form action="" method="post" enctype="multipart/form-data">
                        <table class="form"> 
                            <tr>
                                <td>
                                    <label>Title</label>
                                </td>
                                <td>
                                    <input type="text" name="title" placeholder="Enter Post Title..." class="medium" />
                                </td>
                            </tr> 
                            <tr>
                                <td>
                                    <label>Category</label>
                                </td>
                                <td>
                                    <select id="select" name="select">
                                        <option value="1">Category One</option>
                                        <option value="2">Category Two</option>
                                        <option value="3">Cateogry Three</option>
                                    </select>
                                </td>
                            </tr>  
                            <tr>
                                <td>
                                    <label>Upload Image</label>
                                </td>
                                <td>
                                    <input type="file" name="file"/>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top; padding-top: 9px;">
                                    <label>Content</label>
                                </td>
                                <td>
                                    <textarea class="tinymce" name="content"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top; padding-top: 9px;">
                                    <label>TAGS</label>
                                </td>
                                <td>
                                    <textarea class="" name="tags"></textarea>
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