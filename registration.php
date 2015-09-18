<!DOCTYPE HTML> 
<html>
 <head>
 <title>register</title> 
 	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<script> 
   $(function(){
      $('.header').load("head_modal.html"); 
   });
   </script>
   
   <script> 
   $(function(){
      $('.footer').load("footer.html"); 
   });
  </script>
  
	
 
 </head>
 
 
 <style>
 
 
.require {
color:red;}
 
 </style>
 
 
<body>
<?php

$user = $pass = $fname = $lname = $email  = NULL;

$empty = $errUser = $errPass = $errFname = $errLname = $errEmail = NULL;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST['user'])) {
		$errUser = 'Please enter user id';
	}
	else {
		$user = test_input($_POST['user']);
		
	}
	
	if (empty($_POST['pass'])) {
		$errPass = 'Please enter password';
	}
	else {
		$pass = test_input($_POST['pass']);
		
	}
	
	if (empty($_POST['fname'])) {
		$errFname = 'Please enter first name';
	}
	else {
		$fname = test_input($_POST['fname']);
		
	}
	
	if (empty($_POST['lname'])) {
		$errLname = 'Please enter last name';
	}
	else {
		$lname = test_input($_POST['lname']);
		
	}
	
	if (empty($_POST['email'])) {
		$errEmail = 'Please enter email address';
	}
	else {
		$email = test_input($_POST['email']);
		
	}
	
	if (!empty($user) && !empty($pass) && !empty($fname) && !empty($lname) && !empty($email)) {
	
		Registration(); 
   }
	
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes ($data);
	$daa = htmlspecialchars ($data);
	return $data;
}


 function Registration() {
	 
define('DB_HOST', 'localhost');
 define('DB_NAME', 'login');
 define('DB_USER','root');
 define('DB_PASSWORD',''); 
 
 session_start(); 
 
	 $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD, DB_NAME);
	 
	 if($mysqli->connect_errno > 0) {
    die('Unable to connect to database [' . $mysqli->connect_error . ']');
}
 
 if (isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']))
 {
	 $user = $_POST['user'];
	 $pass = $_POST['pass'];
	 $fname = $_POST['fname'];
	 $lname = $_POST['lname'];
	 $email = $_POST['email'];
	 $password_hash = password_hash($pass, PASSWORD_DEFAULT);
	
	$stmt = $mysqli->prepare("INSERT INTO `username`(`userName`, `First_Name`, `Last_Name`, `pass`, `email`) VALUES (?, ?, ?, ?, ?)");
	if(!($stmt = $mysqli->prepare("INSERT INTO `username`(`userName`, `First_Name`, `Last_Name`, `pass`, `email`) VALUES (?, ?, ?, ?, ?)"))){
        echo "Prepare failed";
    }
	
	$stmt->bind_param('sssss', $user, $fname, $lname, $password_hash, $email);
    if(!$stmt->bind_param('sssss', $user, $fname, $lname, $password_hash, $email)){
     echo "Binding paramaters failed";
    }

	if($stmt->execute()) {
		header("Location: register_success.html");
		
	}
	else {
     echo "Registration failed";
    }

	
 }
 $mysqli->close();
	 //$sql = "INSERT INTO `username`(`userName`, `First_Name`, `Last_Name`, `pass`, `email`) VALUES ('$user','$fname','$lname','$pass', '$email')";
	//$sql = "INSERT INTO `username`( `userName`, `pass`) VALUES ('$user',$pass)";
	//$sql = "INSERT INTO 'username' ('UserNameID', 'userName', 'pass') VALUES (NULL, '$user', '$pass')";
 }
	
	//$result = mysql_query($query);
		

?>

<div>
<br>
</div>

<div class="header"> </div>
<div class="container"> 
 
 <div id="Sign-In"> 
 <fieldset style="width:30%">
 <legend>REGISTER HERE</legend> 
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 User ID
 <br><input type="text" name="user" size="40" value="<?php echo $user; ?>">
  <span class="require"><br><?php echo $errUser;?></span>
 
 <br>
 Password 
 <br><input type="password" name="pass" size="40" value="<?php echo $pass; ?>">
  <span class="require"><br><?php echo $errPass;?></span>
 
 <br>
  First name 
  <br> <input type="fname" name="fname" size="40" value="<?php echo $fname; ?>">
  <span class="require"><br><?php echo $errFname;?></span>
  
  <br> 
  Last name  
 <br><input type="lname" name="lname" size="40" value="<?php echo $lname; ?>">
  <span class="require"><br><?php echo $errLname;?></span>
 <br> 
  Email address
 <br><input type="email" name="email" size="40" value="<?php echo $email; ?>">
  <span class="require"><br><?php echo $errEmail;?></span>
  <br>
  <br><input id="button" type="submit" name="submit" value="Register">
 </form> 
 </fieldset> 
 </div> 
 </div>
 <div class="footer"> </div>
 
 </body> 
 </html> 