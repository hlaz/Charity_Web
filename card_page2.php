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

$name = $address = $city = $state = $zip = $country = $phone = $card = $cvc = $cname = $money = NULL;

$empty = $errName = $errAddress = $errCountry = $errCity = $errZip = $errState = $errPhone = $errCard = $errCvc = $errCname = $errMoney = NULL;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST['name'])) {
		$errName = 'Please enter name';
	}
	else {
		$name = test_input($_POST['name']);
		
	}
	
	if(empty($_POST['address'])) {
		$errAddress = 'Please enter address';
	}
	else {
		$address = test_input($_POST['address']);
		
	}
	
	if(empty($_POST['city'])) {
		$errCity = 'Please enter city';
	}
	else {
		$city = test_input($_POST['city']);
	}

	if (empty($_POST['state'])) {
		$errState = 'Please enter state';
	}
	else {
		$state = test_input($_POST['state']);
	}
	
	
	if (empty($_POST['zip'])) {
		$errZip = 'Please enter zip';
	}
	else {
		$zip = test_input($_POST['zip']);
	}
	
	if (empty($_POST['country'])) {
		$errCountry = 'Please enter country';
	}
	else {
		$country = test_input($_POST['country']);
	}
	
	
	if (empty($_POST['phone'])) {
		$errPhone = 'Please enter phone number';
	}
	else {
		$phone = test_input($_POST['phone']);
	}

	if (empty($_POST['card'])) {
		$errCard = 'Please enter card number';
	}
	else {
		$card = test_input($_POST['card']);
	}
	
	if (empty($_POST['cvc'])) {
		$errCvc = 'Please enter cvc';
	}
	else {
		$cvc = test_input($_POST['cvc']);
	}
	
	if (empty($_POST['cname'])) {
		$errCname = 'Please enter card holder name';
	}
	else {
		$cname = test_input($_POST['cname']);
	}
	
	if (empty($_POST['money'])) {
		$errMoney = 'Please enter amount';
	}
	else {
		$money = test_input($_POST['money']);
	}
	

if ($_POST['submit'])  {
	
	if (!empty($name) && !empty($address) && !empty($city) && !empty($state) && !empty($zip) && !empty($country) && !empty($phone) && !empty($card) &&  !empty($cvc) && !empty($cname) && !empty($money)) {
	
   
        echo '<p>Your message has been sent!</p>';
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
<form class="email" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div>


<div class="col-sm-6">
<span class="top"> Billing Information </span>
<br><br><br>

<div>
  <div class="col-sm-4">
  <label> First Name : <span class="require">*</span> </label> 
  </div>
  <div class="col-sm-8">
  <input name="name"  size="30"  id="name" value="<?php echo $name; ?>">
  <span class="require"><br><?php echo $errName;?></span>
	</div>
	
</div>
<div>
<div class="col-sm-4">
  <label>Last Name : <span class="require">*</span> </label>
  </div>
  <div class="col-sm-8">
  <input name="name" size="30"  id="name" value="<?php echo $name;?>">
  <span class="require"><br><?php echo $errName;?></span>
  </div>
  </div>
  
  <div>
  <div class="col-sm-4">
  <label>Street Address : <span class="require">*</span> </label> 
  </div>
  <div class="col-sm-8">
  <input name="address"  size="30" id="address" value="<?php echo $address; ?>">
  <span class="require"><br><?php echo $errAddress;?></span>
	</div>
	</div>
	
	<div>
	<div class="col-sm-4">
  <label>Street Address (2) : <span class="require">*</span> </label> 
  </div>
  <div class="col-sm-8">
  <input name="address" size="30"  id="address" value="<?php echo $address; ?>">
  <span class="require"><br><?php echo $errAddress;?></span>
	</div>
	</div>
	
	<div>
	<div class="col-sm-4">
  <label>City : <span class="require">*</span> </label> 
  </div>
  <div class="col-sm-8">
  <input name="city"  id="city" size="30" value="<?php echo $city; ?>">
  <span class="require"><br><?php echo $errCity;?></span>
	</div>
	</div>
	
	<div>
	<div class="col-sm-4">
  <label>State / Province : <span class="require">*</span> </label> 
  </div>
  <div class="col-sm-8">
  <input name="state"  size="30"  id="state" value="<?php echo $state; ?>">
  <span class="require"><br><?php echo $errState;?></span>
	</div>
	</div>
	
	<div>
	<div class="col-sm-4">
  <label>Zip / Postal Code : <span class="require">*</span> </label> 
  </div>
  <div class="col-sm-8">
  <input name="zip" size="30"  id="zip" value="<?php echo $zip; ?>">
  <span class="require"><br><?php echo $errZip;?></span>
	</div>
	</div>
	
	<div>
	<div class="col-sm-4">
  <label>Country : <span class="require">*</span> </label> 
  </div>
  <div class="col-sm-8">
  <input name="country" size="30"  id="country" value="<?php echo $country; ?>">
  <span class="require"><br><?php echo $errCountry;?></span>
	</div>
	</div>
	
	<div>
	<div class="col-sm-4">
  <label>Phone # : <span class="require">*</span> </label> 
  </div>
  <div class="col-sm-8">
  <input name="phone" size="30"  id="phone" value="<?php echo $phone; ?>">
  <span class="require"><br><?php echo $errPhone;?></span>
	</div>
	</div>
	
	</div>
	
	<div class="col-sm-6">
<span class="top"> Credit Card Information </span>
<br><br><br>

	<div class="col-sm-4">
  <label>Credit Card # : <span class="require">*</span> </label> 
  </div>
  <div class="col-sm-8">
  <input name="card" size="30"  id="card" value="<?php echo $card; ?>">
  <span class="require"><br><?php echo $errCard;?></span>
	</div>
	<div>&nbsp;</div>
	<div class="col-sm-4">
  <label>Expiration Date : <span class="require">*</span> </label> 
  </div>
  <div class="col-sm-8">
    <SELECT NAME="CCExpiresMonth" >
        
        <OPTION VALUE="01" SELECTED>January 
        <OPTION VALUE="02">February 
        <OPTION VALUE="03">March
        <OPTION VALUE="04">April 
        <OPTION VALUE="05">May 
        <OPTION VALUE="06">June
        <OPTION VALUE="07">July 
        <OPTION VALUE="08">August 
        <OPTION VALUE="09">September
        <OPTION VALUE="10">October 
        <OPTION VALUE="11">November
        <OPTION VALUE="12">December 
      </SELECT> 
	  
	  / 
	  
	  
      <SELECT NAME="CCExpiresYear">
        
        <OPTION VALUE="13" SELECTED>2013
        <OPTION VALUE="14">2014
        <OPTION VALUE="15">2015
        <OPTION VALUE="16">2016
        <OPTION VALUE="17">2017
        <OPTION VALUE="18">2018
        <OPTION VALUE="19">2019
        <OPTION VALUE="20">2020
      </SELECT>
	</div>
  <div>&nbsp;</div>
  <div>
  	<div class="col-sm-4">
  <label> CVC : <span class="require">*</span> </label> 
  </div>
  <div class="col-sm-8">
  <input name="cvc" size="30"  id="cvc" value="<?php echo $cvc; ?>">
  <span class="require"><br><?php echo $errCvc;?></span>
	</div>
</div>
<div>
	<div>&nbsp;</div>
	<div class="col-sm-4">
  <label> Card holder name : <span class="require">*</span> </label> 
  </div>
  <div class="col-sm-8">
  <input name="cname" size="30"  id="cname" value="<?php echo $cname; ?>">
  <span class="require"><br><?php echo $errCname;?></span>
	</div>
	</div>
	</div>
	</div>
	<div class="col-sm-12">
	<div>&nbsp;</div>
	<div>&nbsp;</div>
	<span class="top"> Donation </span>
	<div>&nbsp;</div>
	<div>&nbsp;</div>
	<div>
	<div class="col-sm-4">
  <label> Select Program : <span class="require">*</span> </label> 
  </div>
  <div class="col-sm-8">
        <SELECT NAME="PROGRAM">
        
        <OPTION VALUE="1" SELECTED>Program 1
        <OPTION VALUE="2">Program 2
        <OPTION VALUE="3">Program 3
        <OPTION VALUE="4">Program 4
        <OPTION VALUE="5">Program 5
        <OPTION VALUE="6">Program 6
      </SELECT>
	  
	</div>
	</div>
	
	<div>&nbsp;</div>
	<div class="col-sm-4" align="right">
  <label a> $ <span class="require">*</span> </label> 
  </div>
  <div class="col-sm-8">
  <input name="money" size="10"  id="money" value="<?php echo $money; ?>">
  <span class="require"><br><?php echo $errMoney;?></span>
	</div>
	
	
	
	
	
	</div>
	
	
<input class="send pull-right" type="submit" value="Submit" id="submit" name="submit">
<!--<button type="button" value="Send" class="btn btn-success btn-md pull-right">Submit</button>-->

</div>
</div>

</form>
</div>

</div>
<div class="footer"> </div>

</body>


</html>