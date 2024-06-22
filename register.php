<html>
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<h1><u>REGISTRATION PAGE</U></h1>
	</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: left;
            padding: 50px;
        }

        form {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
		
		body {
			
			background-image: url("image1.jpg");
  
            color: white;
}

        
		

        
    </style>
</head>
	
	<body style="background-color:#b3d1ff"; onload="generate()">
		<form method="post">
			<center><h1><u>Registration page for teaching subject mathematics</u></h1></center>
			<fieldset>
				<legend>
					bio data
				</legend>
				surname: <input type="text" name="surname" required><br><br>
				<input type="text" placeholder="firstname" name="fname" > &nbsp &nbsp <input type="text" placeholder="middlename" name="mname" ><br><br>
				female<input type="radio" value="female" name="gender">
				male<input type="radio" value="male" name="gender"><br><br>
				DOB : <input type="date" name="DOB" ><br><br>

				qualifications: <input list="qfs" name="qfs">
								<datalist id="qfs">
									<option value="12th standard">
									<option value="undergraduate">
									<option value="postgraduate">
									<option value="PHD">
									<option value="BED">
								</datalist>
								<br>
								
			</fieldset>
			<h3>upload image</h3>
			 <input type="file" id="myFile" name="filename"><br><br>
			Password: <input type="password" id="myInput" name="pwd" >
			<input type="checkbox" onclick="myFunction()">Show Password<br><br>
			phone : <input type="number" name="phone" placeholder="accepts only 10 digits" required><br><br>
			Email : <input type="email" name="mailaddress" placeholder="@gmail.com" required><br><br>
			any experience in this field:<textarea width="10" height="10"></textarea>
			<h2><u>courses currently taking for:</u><h2><br>
			<input type="checkbox" value="1" name="ug"> undergraduate<br>
			<input type="checkbox" value="2" name="pg"> postgraduate<br>
			<input type="checkbox" value="3" name="phd"> PHD<br>
			<input type="checkbox" value="4" name="bed"> BED<br>
			<br>
			<br>
			
		
    <div id="user-input" class="inline">
        <input type="text"
               id="submit"
               placeholder="Captcha code" />
    </div>
 
    <div class="inline" onclick="generate()">
        <i class="fas fa-sync"></i>
    </div>
 
    <div id="image"
         class="inline"
         selectable="False">
    </div>
    <input type="submit"name="submit"
           id="btn"
           onclick="printmsg()" />
 
    <p id="key"></p>
</body>
<br>
<br>
			
		</form>
	</body>
	<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<style>
#image{
    margin-top: 10px;
    box-shadow: 5px 5px 5px 5px gray;
    width: 60px;;
    padding: 20px;
    font-weight: 400;
    padding-bottom: 0px;
    height: 40px;
    user-select: none;
    text-decoration:line-through;
    font-style: italic;
    font-size: x-large;
    border: red 2px solid;
    margin-left: 10px;
     
}
#user-input{
    box-shadow: 5px 5px 5px 5px gray;
    width:auto;
       margin-right: 10px;
    padding: 10px;
    padding-bottom: 0px;
    height: 40px;
       border: red 0px solid;
}
input{
    border:1px black solid;
}
.inline{
    display:inline-block;
}
#btn{
    box-shadow: 5px 5px 5px grey;
    color: aqua;
    margin: 10px;
    background-color: brown;
}
</style>

<script>
let captcha;
function generate() {
 
    document.getElementById("submit").value = "";
    captcha = document.getElementById("image");
    let uniquechar = "";
 
    const randomchar =
        "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
 
    for (let i = 1; i < 5; i++) {
        uniquechar += randomchar.charAt(
            Math.random() * randomchar.length)
    }
 
    captcha.innerHTML = uniquechar;
}
 
function printmsg() {
    const usr_input = document
        .getElementById("submit").value;
    if (usr_input == captcha.innerHTML) {
        let s = document.getElementById("key")
            .innerHTML = "Matched";
        generate();
    }
    else {
        let s = document.getElementById("key")
            .innerHTML = "not Matched";
        generate();
    }
}
</script>
</html>




<?php 
if(isset($_POST["submit"]))
{
	session_start();
	$surname=$_POST["surname"];
	$fname=$_POST["fname"];
	$mname=$_POST["mname"];
	$gender=$_POST["gender"];
	$DOB=$_POST["DOB"];
	$qfs=$_POST["qfs"];
	$filename=$_POST["filename"];
	$pwd=$_POST["pwd"];
	$phone=$_POST["phone"];
	$mailaddress=$_POST["mailaddress"];
	echo($fname.$mname);
	echo("<br>");
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"register");
$ins="insert into rdata values('$surname','$fname','$mname','$gender','$DOB','$qfs','$filename','$pwd','$phone','$mailaddress')";
$res=mysqli_query($con,$ins);
if($res)
{
	echo("details inserted seccessfully");
}
}
?>