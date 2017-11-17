
<?php

	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'vespool');
	define('DB_HOST', 'localhost');

	//mysqli_connect() function opens a new connection to the MySQL server.
	//Syntax is:mysqli_connect(host,username,password,dbname,port,socket);
	//All the parameters are optional
	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	if(!$link)	{
		
		//The die() function prints a message and exits the current script.
		die('Could not connect:' . mysqli_connect_error());
	}

	//The mysqli_select_db() function is used to change the default database for the connection.
	$db_select = mysqli_select_db($link, DB_NAME);

	if(!$db_select)	{
		die('Can\'t use ' . DB_NAME . ': ' . mysqli_connect_error());
	}
	
	session_start();
	
	if(isset($_SESSION['login_user'])){
		$user1 = $_SESSION['login_user'];
	}
	
?>

<?php
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// username and password sent from form 
		
		//mysqli_real_escape_string() function escapes special characters in a string for use in an SQL statement.
		//connection=> Specifies the MySQL connection to use
		//escapestring=> The string to be escaped. Characters encoded are NUL (ASCII 0), \n, \r, \, ', ", and Control-Z.
		//Returns the escaped string
		$myusername = mysqli_real_escape_string($link,$_POST["loginname"]);
		$mypassword = md5(mysqli_real_escape_string($link,$_POST['password1'])); 
		
		$sql = "SELECT User_ID FROM user WHERE User_email = '$myusername' and User_password = '$mypassword'";
		
		//The mysqli_query() function performs a query against the database.
		//Syntax is: mysqli_query(connection,query,resultmode);
		//connection=> Specifies the MySQL connection to use
		//query=> Specifies the query string
		//resultmode=> optional. Constant to MYSQLI_USE_RESULT (Used to retrieve large amount of data) or MYSQLI_STORE_RESULT (This is default)
		$result = mysqli_query($link,$sql);
		
		//The mysqli_fetch_array() function fetches a result row as an associative array, a numeric array, or both.
		//Syntax: mysqli_fetch_array(result,resulttype);
		//result=> Specifies a result set identifier returned by mysqli_query(), mysqli_store_result() or mysqli_use_result()
		//resulttype=> Optional. Specifies what type of array that should be produced. Can be one of the following values:
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		//$active = $row['active'];

		//The mysqli_num_rows() function returns the number of rows in a result set.
		$count = mysqli_num_rows($result);
		
		//echo "<BR>count = $count";
		
		// If result matched $myusername and $mypassword, table row must be 1 row
		
	}
	else{
		echo"<h1>You are not logged in</h1><BR><BR>";
		echo"<A HREF = 'SIGN UP.html'> <h2> Login In </H2></A><BR><BR>";
		echo"<A HREF = 'VESPOOL.php'> <h2> Go to Home Page </H2></A><BR><BR>";
		exit();
	}
	
	//To set the flag as done after 60 min of pending when a user logs in
	$query1 = "UPDATE `request rides` SET `Flag`='Time Out' WHERE (`Flag` = 'PENDING' AND TIMESTAMPDIFF(MINUTE, `Time`, NOW())) > 60";
	$result1 = mysqli_query($link,$query1);		
	/*
	if(!$result1)	{
			echo "<div class='pga-style4'><BR>No expired entries in DB<BR></div>";
		}
		else	{
			echo "<div class='pga-style4'><BR>Entries in DB refreshed<BR></div>";
		}
	*/
?>

<!DOCTYPE HTML frameset DTD>
<HTML>
	<head>
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
	</head>
	<body>
		<h1 class="pga-center">
				<IMG SRC = "vespool/Rickshaw.png" width="25" height="25">
					Request Ride
				<IMG SRC = "vespool/Rickshaw.png" width="25" height="25">
		</h1>
		

			<?php
			
				if($count == 1) {
					$_SESSION['login_user'] = $myusername;
					$user1 = $_SESSION['login_user'] ;
				}
				
				echo "<div class='navbar'>
				";
				
				if(!isset($_SESSION['login_user'])){
					echo "
						<div class='dropdown1'>
							<button class='dropbtn1'>
								<a href = 'SIGN UP.html'>
									Sign in
								</a>
							</button>
						</div>";
				}
				else {
					
					echo "
						<div class='dropdown1'>
							<button class='dropbtn1'>
								<a href = '#' style='color: yellow'>
									$user1
								</a>
							</button>
						</div>";
				
				}
		
				echo 
					"	<a href='Register.html'>Register</a>
					<a href = 'Request_RideH.php'>Request Ride</a>
					<a href = 'logout.php'>Sign Out</a>
					<div class='dropdown1'>
						<button class='dropbtn1'>Menu
						  
						</button>
						<div class='dropdown-content1'>
							<a href='VESPOOL.php'>Home</a>
							<a href='About_Us.php'>About Us</a>
							<a href='Overview.php'>Overview</a>
						</div>
					</div> 
				</div>
				
				<div class='pga-style4'><BR><BR><H2><A HREF = 'Request_RideH.php'>'Request a Ride!!'</A></H2></div><br><br><br>";
			
				echo "<div class='pga-style4'><BR>Your signed email id is: $myusername</div><br><br>";
				
				if(isset($_SESSION['login_user'])){
					echo "<div class='pga-style4'><BR>Successful Login!</div><br><br>";
				}
				else{
					echo "<div class='pga-style4'><BR>Your Login Name or Password is invalid or email id is not registered<BR><A HREF = 'SIGN UP.html'>'Login again!'</A></div><br>";
					exit();
				}
			
			?>
		
	</BODY>
	
</HTML>