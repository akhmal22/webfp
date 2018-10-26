<?php 
	ob_start();
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Testing Page
	</title>
</head>
<body>
	<h1>Login</h1>
	<?php
		if(isset($_POST['submit'])):
			echo $_POST['uname'];
			if($_POST['uname'] == 'user' && $_POST['passwd'] == '123'):
				echo "woof woof";
				$_SESSION['valid'] = true;
				$_SESSION['timeout'] = time();
				$_SESSION['uname'] = 'user';
	?>
				<h2>You Logged in!</h2><br/>
	<?php 		else: 
				$msg = 'wrong username or password';
			endif;
	?>
		Pressed!
	<?php 	endif; ?>

	<form class="sign-in-form" action=""  method="post">
		Username: <input type="text" name="uname" id="uname"><br/>
		Password: <input type="password" name="passwd" id="passwd"><br/>
		<input type="submit" name="submit" id="submit" value="login">
	</form>
	
	
</body>
</html>
