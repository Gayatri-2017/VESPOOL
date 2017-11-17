
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

	//echo 'Connected to Session Page Successfully!';
	session_start();
?>
<!DOCTYPE HTML frameset DTD>
<HTML>
	<HEAD>
			<meta charset="UTF-8">
			<link rel="icon" href="vespool/rickshaw.png">
			<TITLE>
				VESPOOL
			</TITLE>
			<link rel="stylesheet" href="VESPOOLCSS.css">
			
	</HEAD>

<body >

	<!--<div class="pga-background"; id ="home";>
		
VESPOOL-->



<?php
		if(!isset($_SESSION['login_user'])){
			echo "<div class='pga-style4'><h3>You are not logged in <h3><BR></div>";
			echo "<div class='pga-style4'><h3><a href = 'SIGN UP.html'> Log in again?</a></h3></div>";
			exit();
			//header("location:login.php");
		}
		$user_check = $_SESSION['login_user'];
	
		$ses_sql = mysqli_query($link,"select User_Name from user where User_Name = '$user_check' ");

		if (!$ses_sql) {
			printf("Error: %s\n", mysqli_error($link));
			exit();
		}
	
		$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

		$login_session = $row['username'];

		//session.gc_maxlifetime = 1440
	
?>
</div>
</body>