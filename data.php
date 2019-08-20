<?php
	session_start();

	$name = $_SESSION['name'];
	$email = $_SESSION['email'];
	$username = $_SESSION['username'];
	$password = $_SESSION['password'];
	$comment = $_SESSION['comment'];
	$gender = $_SESSION['gender'];

?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title>INPUT</title>
</head>
<body>

<div class="jumbotron jumbotron-fluid" align="center">
      <div class="container">
<h2>Your Input:</h2>

<div class = "form-group">
<label>Name:</label>
<?php echo $name; ?>
</div>

<div class = "form-group">
<label>Email:</label>
<?php echo $email; ?>
</div>

<div class = "form-group">
<label>Username:</label>
<?php echo $username; ?>
</div>

<div class = "form-group">
<label>Password:</label>
<?php echo $password; ?>
</div>

<div class = "form-group">
<label>Gender:</label>
<?php echo $gender; ?>
</div>
	

<div class = "form-group">
<label>Comment:</label>
<?php echo $comment; ?>
</div>

<br>

	<a href ="try.php"> Back </a>

</div>
</div>
</body>
</html>