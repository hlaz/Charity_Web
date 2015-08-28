<?php

$myemail = "edwardkim1994@gmail.com";

$name = $_POST['user'];
$subject = $_POST['subject'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];


if ($_POST['submit']) 
	
	{
    if (mail($myemail,$subject,$phone, $comment)) { 
        echo '<p>Your message has been sent!</p>';
		echo '<p>-----------------------------</p>';
		echo '<p> name is : </p>';
		echo $name;
		echo '<p> subject : </p>';
		echo $subject;
		echo '<p> phone number is : </p>';
		echo $phone;
		echo '<p> comment is : </p>';
		echo $comment;
    } else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }
}

if ($_Post['']))
	
	{
		echo 'empty;
		
	}
?>