<html>
	<head>
		<title>example</title>
	</head>
	<body>
		<form method="post" >
			<label for="username">enter your name:</label>
			<input type="text" id="username" name="username">
			<input type="submit" value="submit">
		</form>
<!--php program -->
		<?php
			if($_SERVER["REQUEST_METHOD"]=="POST")
			{
				$username=$_POST["username"];
				setcookie("user",$username,time()+3600,"/");
			}
			if(isset($_COOKIE["user"]))
			{
				$user=$_COOKIE["user"];
				echo("<p> welcome,$user!</p>");
			}
		?>
	</body>
</html>