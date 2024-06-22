<?php
$con=mysqli_connect("localhost","root","");
 mysqli_select_db($con,"register");
$mailaddress = $_GET['mailaddress']; 	
$query = "SELECT * FROM rdata WHERE mailaddress = $mailaddress";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $mailaddress = $row['mailaddress'];
    $pwd = $row['pwd'];
    
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
	<style>
	.container {
  width: 20em;
  background-color: rgb(255, 255, 255);
  overflow: hidden;
  border-radius: 1em;
  text-align: center;
  font-family: 'Open Sans Condensed', sans-serif;
  font-size: 1em;
}
 
.user-image {
  padding: 3em 0;
  background-image: linear-gradient(70deg, #61A1DD, #0083FD);
}
</style>
</head>
<body>
    <h1>User Profile</h1>
	<div class="container">
        <div class="user-image">
            <img src="avtar.jpg">
		</div>
	</div>
    <p><strong>Username:</strong> <?php echo $mailaddress; ?></p>
    <p><strong>Email:</strong> <?php echo $pwd; ?></p>
    <!-- Add more fields here as needed -->
</body>
</html>