
<?php
   //session_start();
   include('session.php');
   $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
   
	$user1 = $_SESSION['login_user'];
	
	$query1 = "SELECT User_ID FROM user WHERE User_email = '$user1' "; 
	$result1 = mysqli_query($link,$query1);
	$row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
	$res1 = $row1['User_ID'];
	
	$query2 = "UPDATE `request rides` SET `Flag` = 'Done' WHERE `User_ID` = $res1";
	$result2 = mysqli_query($link,$query2);?>
	<!--UPDATE table_name
	SET column1 = value1, column2 = value2, ...
	WHERE condition;-->
	<!DOCTYPE HTML frameset DTD>
<HTML>
	<HEAD>
			<meta charset="UTF-8">
			<link rel="icon" href="vespool/rickshaw.png">
			<TITLE>
				VESPOOL
			</TITLE>
			<link rel="stylesheet" href="VESPOOLCSS.css">
			<style >
				.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown1 {
    float: left;
    overflow: hidden;
}

.dropdown1 .dropbtn1 {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}

.navbar a:hover, .dropdown1:hover .dropbtn1 {
    background-color: #ff9900;
}

.dropdown-content1 {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content1 a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content1 a:hover {
    background-color: #ddd;
}

.dropdown1:hover .dropdown-content1 {
    display: block;
}
			</style>
	</HEAD>
	<BODY style="background : url(vespool/greyback.jpg)">
		<h1 class="pga-center">
			<IMG SRC = "vespool/Rickshaw.png" width="25" height="25">
			VESPOOL
			<IMG SRC = "vespool/Rickshaw.png" width="25" height="25">
		</h1>
		<div class="navbar">
  <a href="Register.html">Register</a>
 <a href="SIGN UP.html">Sign In</a>
  <a href = "Request_RideH.php">Request Ride</a>
  <a href = "logout.php">Sign Out</a>
  <div class="dropdown1">
    <button class="dropbtn1">Menu
      
    </button>
    <div class="dropdown-content1">
    	<a href="VESPOOL.php">Home</a>
      <a href="About_Us.php">About Us</a>
		<a href="Overview.php">Overview</a>
      
    </div>
  </div> 
</div>
	
	<?php
	if($result2)	{
		echo "<BR><div class='pga-style4'>Thank you!!<BR><br>";
	}
	
	// remove all session variables
	session_unset(); 

	// destroy the session 
	//session_destroy(); 
	
    
   if(session_destroy()) {
	  echo "<br><h2><div class='pga-style4'>Logged out successfully!<br></div>";
	  echo "<div class='pga-style4'><BR><A HREF = 'SIGN UP.html'><br>Sign in Again?<br></A></h2></div>";
      //header("Location: login.php");
   }/*
	echo "<BR><A HREF = 'VESPOOL.php'><br>Go Back to Main Page.<br></A></h2>";
	if(!isset($_SESSION['login_user'])){
			echo "<h3><div class='pga-style4'><br>You are not logged in </div><h3><BR>";
			echo "<h3><div class='pga-style4'><a href = 'SIGN UP.html'><br> Log in again?</a></div></h3>";
			//header("location:login.php");
	}*/
?>
</body>