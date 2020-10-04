<?php
	include_once "../lib/session.php";
	Sesison::checkLogin();
	include_once "../config/config.php";
	include_once "../lib/Database.php";
	include_once "../helpers/formate.php";
	
	$con    = new con();
	$fm     = new formate();

?>


<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">



		<?php

				$msg = "";

			if ($_SERVER['REQUEST_METHOD'] == "POST") {
				$userNaame  = $_POST['username'];
				$password  	= md5($_POST['password']);

				if ($userNaame == "" || $password == "") {
					$msg = "<b style='color:red'>Filed must not be empty..!</b>";
				}else{
					$sql	= "SELECT * FROM usrs where username = '$userNaame' AND password = '$password'";
					$query  = $con->select($sql);
					if ($query) {
						$value		= mysqli_fetch_assoc($query);
						$rows		= mysqli_num_rows($query);
						if ($rows > 0) {
							Sesison::set('login', true);
							Sesison::set('iuserId', $value['id']);
							Sesison::set('usernames', $value['username']);
							Sesison::set('userImg', $value['image']);
							  
							header("location: index.php");
						}
  
					}else{
						$msg = "<b style='color:red'>Sorry email or password is not matching..!</b>";
					}
				}
 

			}


		?>




		<form action="" method="post">
			<h1>Admin Login</h1>

			<?php echo $msg?>
			<div>
				<input type="text" placeholder="Username" name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password" name="password"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="#">Training with live project</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>