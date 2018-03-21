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
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$a2=$_POST['name'];
$a3=$_POST['email'];
$a4=$_POST['contact'];
$a6=$_POST['pwd'];
$sql="select uid from users";
$res=$conn->query($sql);
if ($res->num_rows > 0) {
    // output data of each row
    while($row = $res->fetch_assoc()) {
      $p1=$row['uid'];
    }
}

$p2=$p1+1;
$q="insert into users values($p2,'$a2','$a3','$a4','$a6')";
$q1="insert into login values($p2,'$a2','$a6','u')";

if ($conn->query($q) && $conn->query($q1) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $q . "<br>" . $conn->error;
}

print "<H2><FONT COLOR=RED><CENTER>WITH THE ID:$p2</FONT></H2>";

?>
</body>
</html>
