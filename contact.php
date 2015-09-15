<!DOCTYPE html>
<html lang="en">

<head>
	<title> Webpage </title>
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
      $('.header').load("head.html"); 
   });
   </script>
   
   <script> 
   $(function(){
      $('.footer').load("footer.html"); 
   });
  </script>
	
</head>

<style>

.top {

font-size:22px;
text-align:left;
margin-top:60px;
margin-bottom:30px;
padding-top:90px;
padding:30px;
}

.require {
color:red;}

.text-danger {
color:red;}

</style>

<body>
<?php

$myemail = "edwardkim1994@gmail.com";

$user = $subject = $email_address = $comment = NULL; 

$empty = $errName = $errSubject = $errEmail =  $errMessage = NULL;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST['user'])) {
		$errName = 'Please enter user name';
	}
	else {
		$user = test_input($_POST['user']);
		
	}
	
	if(empty($_POST['subject'])) {
		$errSubject = 'Please enter subject';
	}
	else {
		$subject = test_input($_POST['subject']);
		
	}
	
	if(empty($_POST['email_address'])) {
		$errEmail = 'Please enter email';
	}
	else {
		$email_address = test_input($_POST['email_address']);
	}

	if (empty($_POST['comment'])) {
		$errMessage = 'Please enter message';
	}
	else {
		$comment = test_input($_POST['comment']);
	}



if ($_POST['submit'])  {
if (!empty($errName) && !empty($errSubject) && !empty($errEmail) && !empty($errMessage) ) {
	
    if (mail($myemail,$user,$subject,$email_address, $comment)) { 
        echo '<p>Your message has been sent!</p>';
    } else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }
}
}	
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes ($data);
	$daa = htmlspecialchars ($data);
	return $data;
}


?>

<div>
<br>
</div>


<div class="header"> </div>
<div class="container">
<div><br></div>
<div>
<span class="top"> We'd <b>love</b> to hear from you. </span>
</div>
<div> <br></div>
<div>

<form class="email" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="col-sm-6">

  <label>Name: <span class="require">*</span> </label>
  <input name="user" class="form-control" id="user" value="<?php echo $user; ?>">
  <span class="require"><?php echo $errName;?></span>


  <br><br><label>Subject: <span class="require">*</span> </label>
  <input name="subject" class="form-control" id="subject" value="<?php echo $subject;?>">
  <span class="require"><?php echo $errSubject;?></span>
  
  <br><br><label>Email: <span class="require">*</span> </label>
  <input name="email_address" class="form-control" id="email_address" value="<?php echo $email_address;?>">
  <span class="require"><?php echo $errEmail; ?> </span>

  
</div>

<div class="col-sm-6">
<div class="form-group">
  <label for="comment">Message: </label>
  <textarea class="form-control" rows="11" id="comment" name="comment" value="<?php echo $comment;?>"></textarea>
  <span class="require"><?php echo $errMessage; ?></span>
</div>


<input class="send pull-right" type="submit" value="Submit" id="submit" name="submit">
<!--<button type="button" value="Send" class="btn btn-success btn-md pull-right">Submit</button>-->

</div>

</form>
</div>

</div>
<div class="footer"> </div>

</body>


</html>