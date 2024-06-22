<?php
// Database connection
$db_host = "localhost";
$db_user = "root";  // Default XAMPP MySQL username
$db_password = "";  // Default XAMPP MySQL password
$db_name = "register"; // Change this to your database name

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the user's information from the database (assuming you have a user ID)
$user_id=1; // Change this to the user's ID you want to display
$sql = "SELECT * FROM rdata WHERE mailaddress = $mailaddress";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
    $row = mysqli_fetch_assoc($result);
    $username = $row[$fname.$mname];
    $email = $row["email"];
    $DOB = $row["DOB"];
} else {
    echo "User not found.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile Page</title>
</head>
<body>
    <h1>Profile Page</h1>
    <p>Username: <?php echo $username; ?></p>
    <p>Email: <?php echo $email; ?></p>
    <p>Bio: <?php echo $bio; ?></p>
</body>
</html>
