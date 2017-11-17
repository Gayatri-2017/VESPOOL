
<?php
   include('session.php');
?>

<!DOCTYPE HTML>
<HTML>
	<HEAD>
		<meta charset="UTF-8">
		<link rel="icon" href="Rickshaw.png">
		<TITLE>
			welcome
		</TITLE>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="VESPOOLCSS.css">
	</HEAD>
   
   <body>
		<h1>Welcome <?php echo $login_session; ?></h1> 
		<!--<h2>Your ride history is:<BR></h2>-->

		<?php
			
			$user_check = $_SESSION['login_user'];
			$ses_sql1 = mysqli_query($link,"select * from user where User_email = '$user_check' ");
			
			if (!$ses_sql1) {
				printf("Error: %s\n", mysqli_error($link));
				exit();
			}
			
			$row = mysqli_fetch_array($ses_sql1, MYSQLI_ASSOC);
			$login_session = $row['User_email'];
			
			$name = $row['User_Name'];	
			$mobile_no = $row['User_Mobile_No'];
			$email_id = $row['User_email'];
			$password1 = md5($row['User_password']);
			$date_of_birth = $row['User_DateOfBirth'];
			$city = $row['User_City'];
			$state = $row['User_state'];
			$pincode = $row['User_Pincode'];
			$organization = $row['Study_At_or_Work_At'];
			$gender = $row['User_Gender'];
			
			echo "<BR><div class='pga-style4'>Your details are:<BR></div>";
			echo "<div class='pga-style4'>Name: $name<BR>Mobile No:$mobile_no<BR>Email-id: $email_id<BR>City: $city<BR>State: $state<BR>Pincode: $pincode<BR>Organization: $organization<BR>Gender: $gender<BR>Date of Birth: $date_of_birth</div>";
			echo "<BR>";
			echo "<div class='pga-style4'><A HREF = 'Request_RideH.php'>Want to request a ride?</A><BR></div>";
			
			if(!isset($_SESSION['login_user']))	{
				echo "<h3><div class='pga-style4'>You are not logged in <h3><BR></div>";
				echo "<div class='pga-style4'><h3><a href = 'SIGN UP.html'> Log in again?</a></h3></div>";
				//header("location:login.php");
			}
		?>
		
      <h2><a href = "logout.php"><br>Sign Out</a></h2>
   </body>
   
</html>