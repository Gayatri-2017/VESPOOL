
<?php
   //session_start();
   include('session.php');
if(isset($_SESSION['login_user'])){
		$user1 = $_SESSION['login_user'];
	}
?>

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
	<BODY style="background : url(vespool/greyback.jpg)">

		<h1 class="pga-center">
			<IMG SRC = "vespool/Rickshaw.png" width="25" height="25"></IMG>
			Request Ride
			<IMG SRC = "vespool/Rickshaw.png" width="25" height="25"></IMG>
		</h1>
		<div class="navbar">
  <a href="Register.html">Register</a>
   <?php
			if(!isset($_SESSION['login_user'])){
				echo "
  <a href='SIGN UP.html'>Sign In</a>
  ";
			}
			else {
				echo "
						<div class='dropdown1'>
						<button class='dropbtn1'>
						<U>	$user1	</U>
						</button></div>
					
				";
			}
		?>
  <a href="About_Us.html">About Us</a>
  <a href = "logout.php">Sign Out</a>
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
<IMG SRC = 'vespool/Rickshaw.png' ALT = 'three' height = '500' width = '500' class = 'pga-imgContainerRight' align="right" margin-top="50px" margin-right="50px">
		<B><h1>
			Registration Status!<BR>
		</h1></B>
		
		<?php

			//define('DB_USER', 'root');
			//define('DB_PASSWORD', '');
			//define('DB_NAME', 'vespool');
			//define('DB_HOST', 'localhost');

			$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

			if(!$link)	{
				die('Could not connect:' . mysqli_connect_error());
			}

			$db_select = mysqli_select_db($link, DB_NAME);

			if(!$db_select)	{
				die('Can\'t use ' . DB_NAME . ': ' . mysqli_connect_error());
			}
			
			echo "<BR>";
			$source = $_POST['Source'];	
			$destination = $_POST['Destination'];	
			$status = $_POST['Ride_Status'];
			
			$source = mysqli_real_escape_string($link, $source);
			$destination = mysqli_real_escape_string($link, $destination);
			$status = mysqli_real_escape_string($link, $status);
			
			echo "<h3>Your selected Source is:</h3><div class='pga-style4'>$source<BR></div><h3>Your selected Destination is:</h3><div class='pga-style4'>$destination<BR></div></h3>";
			
			$query1 = "SELECT Ride_ID FROM ride WHERE Ride_Source = '$source' AND Ride_Destination ='$destination'";
			$result1 = mysqli_query($link,$query1);
			$row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
			$res1 = $row1['Ride_ID'];
			$count1 = mysqli_num_rows($result1);
			
			
			$user_check = $_SESSION['login_user'];
			$query2 = "SELECT User_ID FROM user WHERE User_email = '$user_check' "; 
			$result2 = mysqli_query($link,$query2);
			$row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
			$res2 = $row2['User_ID'];
			$count2 = mysqli_num_rows($result2);
			
			/*$query7 = "SELECT User_LoginName FROM user WHERE User_email = '$user_check' "; 
			$result7 = mysqli_query($link,$query7);
			$row7 = mysqli_fetch_array($result7,MYSQLI_ASSOC);
			$res7 = $row7['User_ID'];
			$count7 = mysqli_num_rows($result7);
			*/

			if($count1 == 1) {
				echo "<div class='pga-style4'; margin-top='0px'; margin-left='0px' ;margin-bottom='0px';><br>Successful Selection!<BR><br><br></div>";	
				//echo "$row['Ride_ID']";
				echo "<div class='pga-style4'><br>The corresponding ride id is: $res1<BR></div>";
				echo "<div class='pga-style4'><br>The user email id is: $user_check<BR></div>";
				echo "<div class='pga-style4'><br>The corresponding user id is: $res2<BR></div>";
				//echo "The user email id is: $_SESSION['login_user']<BR>";
			}
			else	{
				echo "<div class='pga-style4'><BR><H2>Enter valid source and Destination</H2><BR><div>";
				echo "<div class='pga-style4'><h2><A HREF='Request_RideH.php'> Go Back and Request a new Ride</A></H2><div>";
				exit();
			}
			
			//Pending user
			$query5 = "SELECT * FROM `request rides` WHERE `User_ID` = '$res2' AND `Flag` = 'PENDING';";
			$result5 = mysqli_query($link,$query5);
			if(!$result5)	{
				$count5 = 0;
			}
			else	{
				$count5 = mysqli_num_rows($result5);
			}
			//echo "<BR>Count = $count5<BR>";
			if($count5 == 0)	{
				$query3 = " INSERT INTO `request rides` (`Ride_ID`, `User_ID`, `Ride_Status`, `Time`) VALUES ('$res1', '$res2', '$status', CURRENT_TIMESTAMP);";
				$result3 = mysqli_query($link,$query3);
				
				if(!$result3)	{
					echo "<div class='pga-style4'><BR>Data not entered<BR><BR><BR><BR></div>";
					printf("Error: %s\n", mysqli_error($link));
					exit();
				}
				else	{
					echo "<div class='pga-style4'><br>Data entry successful!<BR><BR><BR><BR></div>";
				}
			}
			else	{
				echo "<div class='pga-style4'><br>Your request is pending<BR><BR><BR><BR><BR></div>";
			}		
			if ($status == 'Single')	{
				$query4 = "SELECT `request rides`.`User_ID`, `Ride_Status`, `User_LoginName` FROM `request rides`,`user` WHERE `Ride_ID` = $res1 AND (`Ride_Status` = 'Single' OR `Ride_Status` = 'Double') AND `request rides`.`User_ID` != $res2 AND `Flag` = 'PENDING' AND `request rides`.`User_ID` = `user`.`User_ID`;";
				$result4 = mysqli_query($link,$query4);
				
				if($result4)	{
					//$row4 = mysqli_fetch_array($result4,MYSQLI_ASSOC);
					//$res4 = $row4['User_ID'];
					$count4 = mysqli_num_rows($result4);
					echo "<div class='pga-style4'><br>The pending user ids with same source and destination are:<br></div>";
					while($row4 = mysqli_fetch_array($result4,MYSQLI_ASSOC)) {
						echo "<div class='pga-style4'><br>id:  " . $row4['User_ID']. " <br>Status: " . $row4['Ride_Status'] .  "<br> UserName: " . $row4['User_LoginName'] ."<br></div>";
					}
				}
				else 	{
					echo "<div class='pga-style4'>No result found!<BR></div>";
				}
			}
			else if ($status == 'Double')	{
				$query6 = "SELECT `request rides`.`User_ID`, `Ride_Status`, `User_LoginName` FROM `request rides`,`user` WHERE `Ride_ID` = '$res1' AND (`Ride_Status` = 'Single') AND `request rides`.`User_ID` != $res2 AND `Flag` = 'PENDING' AND `request rides`.`User_ID` = `user`.`User_ID`;";
				$result6 = mysqli_query($link,$query6);
				if($result6)	{
					//$row6 = mysqli_fetch_array($result6,MYSQLI_ASSOC);
					//$res6 = $row6['User_ID'];
					$count6 = mysqli_num_rows($result6);
					echo "<div class='pga-style4'><br>The pending user ids with same source and destination are:<BR></div>";
					while($row6 = mysqli_fetch_array($result6,MYSQLI_ASSOC)) {
						echo "<div class='pga-style4'><br>id: " . $row6['User_ID'].  " </div><div class='pga-style4'><br>Status: " . $row6['Ride_Status'] .  "<br> UserName: " . $row6['User_LoginName'] ."<br></div><br><br><br>";
					}
				}
				else 	{
					echo "<div class='pga-style4'><br>No result found!<BR></div>";
				}
			}
			if(!isset($_SESSION['login_user'])){
				echo "<div class='pga-style4'><h3>You are not logged in <h3><BR></div>";
				echo "<div class='pga-style4'><h3><a href = 'SIGN UP.html'> Log in again?</a></h3></div>";
				//header("location:login.php");
			}	
			
				
			//$user_check = $_SESSION['login_user'];
			//$ses_sql1 = mysqli_query($link,"select User_Name from user where User_email = '$user_check' ");
			//$ses_sql2 = mysqli_query($link,"select * from user where User_email = '$user_check' ");
			/*
			if (!$ses_sql1) {
				printf("Error: %s\n", mysqli_error($link));
				exit();
			}
			
			$row = mysqli_fetch_array($ses_sql1, MYSQLI_ASSOC);
			$login_session = $row['User_email'];
			*/

		?>
		<h2><a href = "logout.php"><br><br><br><br>Sign Out</a></h2>
		<h3><a href = "VESPOOL.php"><br>Go Back to Main Page</a></h3>
	</BODY>
	
</HTML>