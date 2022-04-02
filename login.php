<?php 

	require "init.php";

	if(count($_POST) > 0)
	{
		//something was posted
		$User = new User();
		$errors = $User->login($_POST);

		if(is_array($errors) && count($errors) == 0)
		{
			header("Location: index.php");
			die;
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
</head>
<body style="background-color: bisque">

	<?php include "header.php"?>
	<br>
	<h1>Login</h1>
	<form method="post" style="padding: 10px;border: solid thin #aaa; border-radius: 10px;margin:auto;width: 500px; height:200px;background-color: cadetblue;">

		<?php 
			if(isset($errors) && count($errors) > 0){
				foreach ($errors as $error) {
					echo $error . "<br>";
				}
			}
		?>
		<h2>Login</h2>
		<hr>
		<input class="textbox" type="email" name="email" placeholder="Email" value="<?=isset($_POST['email']) ? $_POST['email'] : '';?>"><br>
		<input class="textbox" type="password" name="password" placeholder="Password" value="<?=isset($_POST['password']) ? $_POST['password'] : '';?>"><br>
		<br>
		<input class=" button" type="submit" value="Login">
	</form>
</body>
</html>