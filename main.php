<!DOCTYPE html>
<?php
 
 session_start(); 
include_once 'db_config.php'; 
	 $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD, DB_NAME);
	 
	 if($mysqli->connect_errno > 0) {
    die('Unable to connect to database [' . $mysqli->connect_error . ']');
}

//$res = mysqli_query("SELECT `UserNameID`, `userName`, `First_Name`, `Last_Name`, `pass`, `email` FROM `username` WHERE userName =".$_SESSION['user']);
//$userRow = mysqli_fetch_array($res);
?>
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
  
  <script
	src="http://maps.googleapis.com/maps/api/js">
   </script>
   
   <script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(37.338208,-121.886329),
    zoom:9,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
	
</head>

<style>

.navbar .navbar-nav {
  display: inline-block;
  float: none;
  vertical-align: top;
}

.navbar .navbar-collapse {
  text-align: center;
}

#name { font-size:20pt;}

.carousel-inner img {
  margin: auto;
}

#under {
width:880px;
pading:30px 0 10px 150px;
margin: auto;
text-align: left;}


.well {
text-align:center; }


#goal {
text-align:center;
}


.left
{
    margin-left: 0px;
    top: 0px;
    z-index: 44;
	float:left;
	font-size:10px;
	text-align:left;}

.programs {
margin-top:30px;
margin-bottom:30px;
padding-bottom:30px;}	
	
.programs_two {

padding-top:130px;
margin-top:200px;
}

.well {margin-top: 60px;
padding-top:-40px;

}

.text {font-size:19pt;
text-align:left;}

.goal {

margin-top:50px;}

.goal_two {
margin-top:40px;}

.center_donate {
text-align:center;
background-color:#D44E4E;
color:white;
font-size:26px;
margin-top:30px;}


p
{
margin-left: 0px;
overflow: auto;
display: block;
}

#section3 {
text-align:center;
}

.text2 {
font-size:19pt;}

.contact {
font-size:19pt;
text-align:left;
}

#promise {
padding-bottom:50px;}
</style>

<body>
<?php
if($_SESSION["userName"]) {
?>
Welcome <?php echo $_SESSION["userName"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.
<?php
}
?>
<div>

</div>
<div>
<br>
</div>




<div class="header"> </div>
<div class="container">
<!--
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">About Us</a></li>
        <li><a href="#">Get involved</a></li>
        <li><a href="#">Mission</a></li> 
        <li><a href="#">Another Menu</a></li> 
      </ul>
    </div>
  </div>
</nav>
-->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="pic/rsz_6-how-to-choose-right-charity-foundation.jpg" alt = "how can you help us">
	  
    </div>

    <div class="item">
		<img src="pic/rsz_charity_975x542.jpg" alt="second_pic">
      <!--<img src="http://fakeimg.pl/1000x400/" alt = "what we do">-->
    </div>

    <div class="item">
      <img src="pic/donate.jpg" alt = "what's our goal">
    </div>

    <div class="item">
	<img src="pic/charity_t.jpg" alt="who we are">
      
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<div class="programs">
	<div class="col-sm-4">
			<img src="pic/pos_donate.png">
	</div>
	<div class="col-sm-4">
		<img src="pic/pos_participate.png"></div>
	<div class="col-sm-4">
		<img src="pic/pos_program.png"></div>
</div>

<div class="programs_two">
	<div class="col-sm-4">
			<img src="pic/pos_latest2.png">
	</div>
	<div class="col-sm-4">
		<img src="pic/pos_whoweare2.png"></div>
	<div class="col-sm-4">
		<img src="pic/pos_upcoming2.png"></div>
</div>

<div class="well well-lg well-danger col-sm-12">
    <h3> Sign up for the news </h3>
	<form action="action_page.php">
		Email : <input type="email" name="email">
      <input type="submit" value="Submit">
</form>
</div>

<div id="goal" class="col-sm-12">
<h1 class="goal_two" id="section2"> Our Goal <h1>

<div class="row">
	<div class="col-md-4">
		 <a href="donate.html"><img src="pic/Donate.png" class="left"></a>
		</div>
	<div class="col-md-8 text">
<p> The Charity Website, an international movement, is an evangelical part of the universal Christian 
Church. Its message is based on the Bible. Its ministry is motivated by the love of God. Its mission 
is to preach the gospel of Jesus Christ and to meet human needs in His name without discrimination.
These are taken from another charity website</p>
</div>
</div>
</div>


<div id="promise" class="col-sm-12">
<h1 class="goal_two" id="section3"> Our Promise <h1>

<p class="text2"> The Charity Website, an international movement, is an evangelical part of the universal Christian 
Church. Its message is based on the Bible. Its ministry is motivated by the love of God. Its mission 
is to preach the gospel of Jesus Christ and to meet human needs in His name without discrimination.
These are taken from another charity website</p>
</div>
<!--
<div class="well well-lg well-danger col-sm-12">
    <h3> Find Locations </h3>
	<form action="action_page.php">
		Zip Code: <input type="zip" placeholder="    Zip Code" name="zip">
      <input type="submit" value="Search">
</form>
</div>
-->

<div id="promise" class="col-sm-12">
<h1 class="goal_two" id="section3"> Contact Us <h1>

<div class="col-sm-4">
<div class="contact">
<h3><img src="pic/rsz_1envelope91.png">       hello@gmail.com</h3>
<h3> <img src="pic/rsz_1phone-call24.png">        1.408.314.4333 </h3>
<h3> <img src="pic/rsz_1rsz_road-map3.png">        San Jose, CA </h3>
</div>
</div>

<div class="col-sm-8">
<div id="googleMap" style="width:700px;height:300px;"></div>

</div>		
</div>
		
<!--
<div> <br><br><br><br><br><br><br><br></div>
<div id="goal">
<h1> Our Promise <h1>
<div>
<div class="col-sm-8">
<p> we do thseseaeoifjaiodjfaodsjf aodifj iosjfaiojfioasjfoi ajdoifj aiodfjao jdiajfo adjosfjioasjfoaisj oifajiofjsoifjiosajfioasjofisajfioajsif </p>
</div>
<div class="col-sm-4">
<img src="http://fakeimg.pl/200/">

</div>
</div>
</div> 
-->
<!--
	<nav id="footer" class="col-sm-12">
			<ul>
				<li>
					<a href="#"> About Us</a>
				<ul>
					<li> <a href="#"> Our History </a> </li>
					<li> <a href="#"> Our Mission </a> </li>
					<li> <a href="#"> Our Goal </a> </li>
					<li> <a href="#"> Our Programs </a> </li>
				</ul>
				</li>
		</ul>
		-->

</div>

		
<div class="footer"></div>

</body>

</html>