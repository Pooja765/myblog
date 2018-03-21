<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "aissel123";
$dbname = "Blogdb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$a=$_SESSION['ID'];
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$res="select * from login where userid=$a";
$result = $conn->query($res);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $indi=$row['type'];
      $abc=$row['pwd'];
    }
}
	$name=$row['id'];
    $id =$row['id'];
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Food Blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="add_post.php">Add post</a>
      <a class="navbar-brand" href="view_post.php">View post</a>
      <a class="navbar-brand" href="edit_post.php">Edit post</a>
      <a class="navbar-brand" href="index.php">Logout</a>
    </div>


  </div>
</nav>
</div>


<div class="container">
<div class="row">
  <center>
    <h1><font color="brown">Yum...Yum...Yummy Recipes</font></h1>
    <img src="tasty.jpeg" style="height:45px;">
  </center>
</div>
</div>


<div class="container">
  <div class="row">
    <hr/>
    <img src="chat.jpeg"></img>
    <img src="samosa.jpeg"></img>
    <img src="biryani.jpeg"></img>
    <img src="gobi.jpeg"></img>
<hr/>
  </div>
</div>

</body>
</html>
