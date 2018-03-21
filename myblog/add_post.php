<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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

<center>
<form action="addpostprocess.php" method="post">
  <h1>POST YOUR RECIPE</h1>
<br>
 <input type="file" name="file" id="file" data-toggle="tooltip" title="Upload image!">
 <br>
  <b>Description :</b>
  <br><textarea rows="10" cols="50" name="desc"> </textarea><br><br>
<input type="submit" value="Post">
</form>
</center>


<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>

</body>
</html>
