<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogdb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//$a=$_SESSION['ID'];
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$res="select * from users where uid=$a";
$result = $conn->query($res);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      $abc=$row['uid'];
    }
}
    $id =$row['uid'];
 ?>



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

$a2=$_POST['file'];
$a3=$_POST['desc'];
$sql="select uid from users";
$res=$conn->query($sql);
if ($res->num_rows > 0) {
    // output data of each row
    while($row = $res->fetch_assoc()) {
      $p1=$row['uid'];
    }
}
$p2=$p1+1;
$q="INSERT INTO img_post(img_id,img_link,desc_content,iuid) VALUES(LOAD_FILE('/var/www/html/myblog/images'),$a3,$id)";

if ($conn->query($q) && $conn->query($q1) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $q . "<br>" . $conn->error;
}

print "<H2><FONT COLOR=RED><CENTER>WITH THE ID:$p2</FONT></H2>";

?>
</body>
</html>
