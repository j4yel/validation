

<!DOCTYPE HTML>  
<html>
<head>

<style>


.error {color: #FF0000;}


</style>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <title>Validation Form</title>

</head>


<body >  

<div class="jumbotron jumbotron-fluid" >
      <div class="container"  >


<?php
// define variables and set to empty values
$nameErr = $emailErr = $usernameErr = $passwordErr = $genderErr = "";
$name = $email = $username = $password = $comment = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //Name
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  //Email
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  //Username  
  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
  }

  //Password
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }

  //Comment
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  //Gender
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["gender"]) ) {
    
  }

 else {
   session_start();
    $_SESSION['name']= htmlentities($_POST['name']);
    $_SESSION['email']= htmlentities($_POST['email']);
    $_SESSION['username']= htmlentities($_POST['username']);
    $_SESSION['password']= htmlentities($_POST['password']);
    $_SESSION['gender']= htmlentities($_POST['gender']);
    $_SESSION['comment']= htmlentities($_POST['comment']);
    header('Location: data.php');
  }


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


    



<h2 align="center">PHP Form Validation Example</h2>
<p align="center"><span class="error">* required field</span></p>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">  


<div align="center">
  <label>Name:</label><br>
   <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  </div>

<div align="center">
  <label>E-mail:</label> <br><input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br>
 </div>

<div align="center">
 <label> Username:</label> <br><input type="text" name="username">
  <span class="error">*<?php echo $usernameErr;?></span>
  <br>
 </div>

<div align="center">
 <label> Password:</label> <br><input type="password" name="password">
  <span class="error">*<?php echo $passwordErr;?></span>
  <br>
</div>

<div  align="center">
 <label> Comment:</label> <br>
 <textarea name="comment" rows="5" cols="40"></textarea>
  <br>
</div>

<div align="center">
 <label> Gender:</label>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br>
</div>


<div align="center">
  <button type="submit" name="submit" class="btn btn-primary" >SUBMIT</button> 
</div>
</form>


</div>
</div>

</body>
</html>