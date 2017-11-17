
<HTML>
	<HEAD>
		<TITLE>
			Registration Status!
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
	<BODY>
		<!--<B>
			Registration Status.
		</B>-->
	
	
		<h1 class="pga-center">
			<IMG SRC = "vespool/Rickshaw.png" width="25" height="25">
			VESPOOL
			<IMG SRC = "vespool/Rickshaw.png" width="25" height="25">
		</h1>
		<div class="navbar">
  
  <a href="SIGN UP.html">Sign In</a>
  <a href = "Request_RideH.php">Request Ride</a>
  <div class="dropdown1">
    <button class="dropbtn1">Menu 
      
    </button>
    <div class="dropdown-content1">
      <a href="VESPOOL.php">Home</a>
		<a href="Overview.php">Overview</a>
      <a href="About_Us.php">About Us</a>
    </div>
  </div> 
</div>
		<!--
		<H4 class="pga-logo pga-center">
			VESPOOL
		</H4>
		<div class="pga-dropdown">
			
			<button class="pga-dropbtn">
				Ride
			</button>
			<div class="pga-dropdown-content">
				<a href="Overview.html">Overview</a>
				<a href="About_Us.html">About Us</a>
				
			</div>
		</DIV>
		
		<DIV style="float:right;">
			<button class="pga-dropbtn" >
				<a href = "logout.php">
					Sign Out
				</a>
			</button>
		</div>
		
		<DIV style="float:right;">
			<button class="pga-dropbtn" >
				<a href = "SIGN UP.html">
					Sign in
				</a>
			</button>
		</div>
	-->
		<?php

			define('DB_USER', 'root');
			define('DB_PASSWORD', '');
			define('DB_NAME', 'vespool');
			define('DB_HOST', 'localhost');

			$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

			if(!$link)	{
				die('Could not connect:' . mysqli_connect_error());
			}

			$db_select = mysqli_select_db($link, DB_NAME);

			if(!$db_select)	{
				die('Can\'t use ' . DB_NAME . ': ' . mysqli_connect_error());
			}
			/*
			if(!isset($_SESSION['login_user'])){
				echo "<h3>You are not logged in <h3><BR>";
				echo "<h3><a href = 'SIGN UP.html'> Log in again?</a></h3>";
				exit();
				//header("location:login.php");
			}
			*/
			//echo 'Connected Successfully!';
			echo "<BR>";
			if(isset($_POST['Name']))	{
				$name = $_POST['Name'];	
				$mobile_no = $_POST['mobile_no'];
				$email_id = $_POST['email_id'];
				$password1 = md5($_POST['password1']);
				$date_of_birth = $_POST['date_of_birth'];
				$city = $_POST['city'];
				$state = $_POST['state'];
				$pincode = $_POST['pincode'];
				$organization = $_POST['organization'];
				$gender = $_POST['gender'];
				$username = $_POST['username'];
				//echo "$name";
				
				$sql = "INSERT INTO user(User_Name,User_Mobile_No,User_email,User_password,User_City,User_state,User_Pincode,Study_At_or_Work_At,User_Gender,User_DateOfBirth,User_LoginName) VALUES ('$name', '$mobile_no', '$email_id', '$password1', '$city', '$state', '$pincode', '$organization', '$gender', '$date_of_birth', '$username');";
				
				$result=mysqli_query($link, $sql);

				if(!$result)	{
					echo "<div class='pga-style4'><a href='REGISTER.html'>Back to registration page</a></div>";
					die('Error : ' . mysqli_error($link));
				}
				else	{
					//echo 'Successfully inserted!';
					echo "<IMG SRC = 'vespool/thankreg.gif' ALT = 'three' height = '400' width = '500' class = 'pga-imgContainerRight' align='right'>";
					echo "<BR>";
					//echo "<div class='pga-style4'> You have successfully registered for VESPOOL.<BR>You do not have a ride history.";
					echo "<div class='pga-style4'> You have successfully registered for VESPOOL.<BR>";
					
					echo "<div class='pga-style4'><BR><a href='VESPOOL.php'>Back to main page</a></div>";
					echo "<div class='pga-style4'><BR>Your details are:<BR></div>";
					echo "<div class='pga-style4'><br>Name: $name<BR>Mobile No:$mobile_no<BR>Email-id: $email_id<BR>City: $city<BR>State: $state<BR>Pincode: $pincode<BR>Organization: $organization<BR>Gender: $gender<BR>Date of Birth: $date_of_birth<BR>Username: $username</div>";
					echo "<BR>";
					//echo "<BR><a href='SIGN UP.html'>Sign In</a><BR>";
					
				}
				mysqli_close($link);
			}
			else	{
				echo "<div class='pga-style4'><h2>Data not entered correctly!</h2>
						<IMG SRC = 'vespool/sadface.png' ALT = 'sadface' width = '50' height = '50'><BR><h3><a href = 'REGISTER.HTML'>Register Again!</A></h3><BR></div>";
				echo "<div class='pga-style4'><h2><a href = VESPOOL.php>Go back to main page</a></h2><BR></div>";
			}
				
		?>
	
	</BODY>
</HTML>
<!--<BR>Increase your ride history by using the application on</div> <A HREF = 'https://play.google.com/store?hl=en'><div class='pga-style4'>Google Play Store</div></A>echo "<IMG SRC='vespool/googleplay.png' ALT = 'Google Play Store' width = '150' height = '50'>";
					echo "<div class='pga-style4'>or on<A HREF = 'https://search.itunes.apple.com/WebObjects/MZContentLink.woa/wa/link?mt=8&path=appstore'> App Store</A></div>";
					echo "<IMG SRC='vespool/appstore.png' ALT = 'appstore' width = '150' height = '50'>";-->