<html>
<head>
</head>
<body>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "aissel123";
$dbname = "Blogdb";

$a=$_POST['uname'];
$b=$_POST['pwd'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$res="select * from login where uname='$a' and pwd='$b'";
$result = $conn->query($res);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $indi=$row['type'];
      $abc=$row['pwd'];
    }
}
if($indi=="d")
{
 header("Location:dairy.php");
 $_SESSION['ID']=$abc;
}
else if($indi=="admin")
{
 header("Location:user_page.php");
 $_SESSION['ID']=$abc;
}
else
{
	header("Location:user_login.php");
}

?>
</body>
</html>
