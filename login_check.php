<?php 

define('DB_HOST', 'localhost');
 define('DB_NAME', 'login');
 define('DB_USER','root');
 define('DB_PASSWORD',''); 
 
 $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
 $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

 
 function SignIn() 
 { 
	session_start(); 
	//echo "connected";
	
	if  (!empty($_POST['user'])) 
		
	{ 
		$query = mysql_query("SELECT * FROM UserName where userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error()); 
		$row = mysql_fetch_array($query);

		if(!empty($row['userName']) AND !empty($row['pass'])) 
		
		{ 
		$_SESSION['userName'] = $row['pass'];
		echo "LOGIN SUCCESS"; 
		} 
		else {
			echo "LOGIN FAILED"; 
			} 
	
	} 
			
	} 
		
		if(isset($_POST['submit']))

			{ 
			//echo "submit is submitted"; 
			SignIn(); } 
			
?>