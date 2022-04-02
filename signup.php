<?php
	require "init.php";

	if(count($_POST) > 0)
	{
		$User = new User();
		$errors = $User->create($_POST);

		if(is_array($errors) && count($errors) == 0)
		{
			header("Location: login.php");
			die;
		}

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" href="style.css">
</head>
<body style="background-color: bisque">
	<?php include "header.php"?>
	<br>
	<h1>Signup</h1><br>


	<form method="post" style="padding: 10px;border: solid thin #aaa; border-radius: 10px;margin:auto;width: 500px; height:250px;background-color: cadetblue">

		<?php 
			if(isset($errors) && count($errors) > 0){
				foreach ($errors as $error) {
					echo $error . "<br>";
				}
			}
		?>
		<h2>Sign Up</h2>
		<hr>
		<input class="textbox" type="text" name="username" placeholder="Username" value="<?=isset($_POST['username']) ? $_POST['username'] : '';?>"><br>
		<input class="textbox" type="email" name="email" placeholder="Email" value="<?=isset($_POST['email']) ? $_POST['email'] : '';?>"><br>
		<input class="textbox" type="password" name="password" placeholder="Password" value="<?=isset($_POST['password']) ? $_POST['password'] : '';?>"><br>
		<br>
		<input class="button" type="submit" value="Signup">
	</form>
</body>
</html>