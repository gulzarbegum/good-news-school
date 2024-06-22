

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 50px;
        }

        form {
            max-width: 300px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }
		
		body {
			background-image: url("image1.jpg");
  
            color: white;
}

.split {
  height: 100%;
  width: 30%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  left: 0;
  
}

.right {
  right: 0;
  background-color: rgba(0, 0, 0, 0.8);
  
  opacity:1.0;
  
}
    </style>
</head>
<body style="background-color:#b3d1ff";>
<div class="split right">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <form action="parentlog.php" method="get">
        <h2 style="color:black">Parent Login</h2>
        
        <input type="text" name="mailaddress" placeholder="Email" required>
        <br>
        <input type="password" name="pwd" placeholder="Password" required>
        <br>
        <button type="submit" name="check">Login</button>
    </form>
</div>
</body>
</html>

<?php
 if(isset($_GET["check"]))
 {
	 $mailaddress=$_GET["mailaddress"];
	 $pwd=$_GET["pwd"];
	 $con=mysqli_connect("localhost","root","");
 mysqli_select_db($con,"register");
	 
	 $sr="select * from rdata WHERE mailaddress='$mailaddress' AND pwd='$pwd'";
	 $res=mysqli_query($con,$sr);
	 
     $count=mysqli_num_rows($res);

    

    if($mailaddress==""&&$pwd==""){
        echo "<p>Can't be empty</p>";
    }
    if ($res->num_rows > 0) 
{
    header("Location:web.html");
} 
 }
 ?>