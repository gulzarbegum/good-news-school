<html>	
	<body>
		<form method="get">
		
			<input type="text" name="a">a
			<input type="text" name="b">b
			<input type="submit" name="result" value="res">
		</form>
	</body>
</html>
<?php
	if(isset($_GET["result"]))
		{
			$a=$_GET['$a'];
			echo("<br>");
			$b=$_GET['$b'];
			echo("<br>");
			echo("the addition of a and b is".($a+$b));
		}
?>
