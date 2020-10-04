<?php include "inc/header.php"?>


	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">
				<h2>Contact us</h2>

				<?php
							$msg  = "";
                        if ($_SERVER['REQUEST_METHOD'] == "POST") {
                            $firstname    = $_POST['firstname'];
                            $lastname     = $_POST['lastname']; 
                            $email        = $_POST['email'];
							$message      = $_POST['message']; 


							if ($firstname == "" || $lastname == "" || $email == "" || $message == "") {
								$msg = "<b style='color:red'>Please fill all the boxes..</b>";
							}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
								$msg = "<b style='color:red'>Give a valida E-mail address please..</b>";
							}else { 
								$sql  		= "INSERT INTO contact(first_name,last_name,email,messages) VALUES('$firstname','$lastname','$email','$message')";
								$contact	= $con->insert($sql);
								$msg = "<b style='color:green'>Thank you so much..</b>";
							}


                        }

                    ?>  

				<form action="" method="post">
					<?php echo $msg;?>
					<table>
						<tr>
							<td>Your First Name:</td>
							<td>
							<input type="text" name="firstname" placeholder="Enter first name"/>
							</td>
						</tr>
						<tr>
							<td>Your Last Name:</td>
							<td>
							<input type="text" name="lastname" placeholder="Enter Last name"/>
							</td>
						</tr> 
						<tr>
							<td>Your Email Address:</td>
							<td>
							<input type="text" name="email" placeholder="Enter Email Address"/>
							</td>
						</tr>
						<tr>
							<td>Your Message:</td>
							<td>
							<textarea name="message"></textarea>
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
							<input type="submit" name="submit" value="Submit"/>
							</td>
						</tr>
					</table>
				<form>				
 			</div>

		</div>
		<?php include "inc/sidebar.php";?>
	</div>

	
	<?php include "inc/footer.php";?>