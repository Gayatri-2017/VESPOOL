<?php
	session_start();
	
	/*if(!isset($_SESSION['login_user'])){
		echo "<h3>You are not logged in <h3><BR>";
		echo "<h3><a href = 'SIGN UP.html'> Log in again?</a></h3>";
		exit();
		//header("location:login.php");
	}
	*/
	if(isset($_SESSION['login_user'])){
		$user1 = $_SESSION['login_user'];
	}
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
			<style >
			/* Navbar container */
				.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;
}
/* Links inside the navbar */
.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
/* The dropdown container */
.dropdown1 {
    float: left;
    overflow: hidden;
}
/* Dropdown button */
.dropdown1 .dropbtn1 {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}
/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown1:hover .dropbtn1 {
    background-color: #ff9900;
}
/* Dropdown content (hidden by default) */
.dropdown-content1 {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
/* Links inside the dropdown */
.dropdown-content1 a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}
/* Add a grey background color to dropdown links on hover */
.dropdown-content1 a:hover {
    background-color: #ddd;
}
/* Show the dropdown menu on hover */
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
  <a href = "Request_RideH.php">Request Ride</a>
  <a href = "logout.php">Sign Out</a>
  <div class="dropdown1">
    <button class="dropbtn1">Menu
      
    </button>
    <div class="dropdown-content1">
      <a href="About_Us.php">About Us</a>
		<a href="Overview.php">Overview</a>
      
    </div>
  </div> 
</div>
<BR><BR><div style="float: left">
		<h1 style = "line-height: 0px;font-size:75px;font-family: cursive ;">
			VESPOOL
		</h1>
		<p class = "pga-style2" style = "line-height: 0px; font-size:30px;"	>
			Together, we save
		</p>
		<P class = "pga-style3" style = "font-size: 1cm;font-family: cursive;color: red" >
			VESPOOL matches you with riders heading in the same<br> direction, so you can share the ride and cost.
		</p>
		<!--
		<ul class = 'pga-style5' >
			<li>-->
				<p style="text-align: left;float: left;font-size: 1cm" >Share your auto rickshaw with other VESPOOL users <br>travelling along your route. Save upto 70% on your everyday<br> travel expenses.<br>
				<!--<IMG SRC = "vespool/savings.png" ALT = "savings" height = '30' width = '30'>-->
			<!--</li>
			
			<li>-->
				You are always paired with other VESPOOL users heading <br>the same way. Ensuring minimum deviations and a better ride<br> experience.
				<IMG SRC = "vespool/route.svg" ALT = "route" height = '30' width = '30'></IMG><br>
				
			<!--</li>
			
			<li>-->
				Sharing your ride with other VESPOOL users would help reduce traffic<br> woes and pollution.
				<IMG SRC = "vespool/plant.png" ALT = "plant" height = '30' width = '30'></IMG></p></div>
			<!--</li>
		</ul>
		<BR><BR><BR><BR><BR><BR><BR><BR><BR>
		</H4>-->

		<iframe src="imagetable.html" height="600" width="701" align="right" scrolling="yes" style="border:10px solid black;"></iframe>
	<!--<BODY>

		<p align="center"><font face="MV Boli" color="Black" size="22" text-align= "right">VESPOOL</font></p>
		<ul>
		  <li><h><a class="active" href="#home">Ride</a></h></li>

		<div class="pga-dropdown">
			
			<button class="pga-dropbtn">
				Ride
			</button>
			<div class="pga-dropdown-content">
				<a href="Overview.html">Overview</a>
				<a href="About_Us.html">About Us</a>
				
			</div>
		</DIV>-->

			<!--
		  <li style="float:right"><a href="logout.php">Sign-out</a></li>-->
		  <!--<li style="float:right"><a href="SIGN UP.html">Sign-in</a></li>-->
<!--
		  <?php
			/*if(!isset($_SESSION['login_user'])){
				echo "<li style='float:right'>
				
						<a href = 'SIGN UP.html'>
							Sign in
						</a>
					
				";
			}
			else {
				echo "<DIV style='float:right;'>
					
						<U>	$user1	</U>
						
					
				</div>";
			}*/
		?>-->
<!--
		  <li style="float:right"><a href="Register.html">Register</a></li>
		</ul>-->

<!--
		<p><img src="vespool/Rik.jpg" width="900" height="400" style="float:right"></p>

		<p><img src="vespool/white.jpg" width="425" height="400" style="float:right"></p>

		<div><font face="Yu Gothic Light" >Together, We save...</font></div>

		<abc>You’re not the only one going your way. VESPOOL matches you with riders heading in the same direction so you can share your ride and the cost.</abc>

		<def style="float:right"><font face="Yu Gothic Light" >What to expect with VESPOOL</font></def>

		<p><IMG STYLE="position:absolute; TOP:850px; LEFT:450px; WIDTH:200px; HEIGHT:200px" SRC="vespool/watch.png">Watch</p>

		<IMG STYLE="position:absolute; TOP:875px; LEFT:750px; WIDTH:150px; HEIGHT:150px" SRC="vespool/money.png">

		<ghi style="float:left"><font face="Yu Gothic Light"><strong>Save Time</strong></font></ghi>-->

		<!--
		<h1 class="pga-center">
			VESPOOL
		</h1>
		<H4 class="pga-logo pga-center" >
			VESPOOL
		</H4>
	--><!--
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
		</div>-->
		
		
		<!--
		<DIV style="float:right;">
			<button class="pga-dropbtn" >
				<a href = "Register.html">
					Register
				</a>
			</button>
		</div>
		
		<BR><BR>
		<h1 style = "line-height: 0px;">
			VESPOOL
		</h1>
		<p class = "pga-style2" style = "line-height: 0px;"	>
			Together, we save
		</p>
		<P class = "pga-style3" style = "line-height: 0px;">
			VESPOOL matches you with riders heading in the same direction, so you can share the ride and cost.
		</p>-->
		<!--
		<ul class = 'pga-style4'>
			<li>
				Share your auto rickshaw with other VESPOOL users travelling along your route. Save upto 70% on your everyday travel expenses.
				<IMG SRC = "vespool/savings.png" ALT = "savings" height = '50' width = '50'>
			</li>
			
			<li>
				You are always paired with other VESPOOL users heading the same way. Ensuring minimum deviations and a better ride experience.
				<IMG SRC = "vespool/route.svg" ALT = "route" height = '50' width = '50'>
				
			</li>
			
			<li>
				Sharing your ride with other Ola users would help reduce traffic woes and pollution.
				<IMG SRC = "vespool/plant.png" ALT = "plant" height = '50' width = '50'>
			</li>
		</ul>
		<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
		</H4>
		<Table>
			<TR>
				<TD>
					<IMG SRC = "vespool/vesit.png" ALT = "vesit" class = "pga-img1">
				</TD>
				<TD>
					<IMG SRC = "vespool/vesjc.png" ALT = "vesjc" class = "pga-img1">
				</TD>
				<TD>
					<IMG SRC = "vespool/kurla.png" ALT = "kurla" class = "pga-img1">
				</TD>
				<TD>
					<IMG SRC = "vespool/chembur.png" ALT = "chembur" class = "pga-img1">
				</TD>
				
		
		
				
				
			</TR>
		</TABLE>
		-->
		<!--<TABLE>
			<TR>
				<TD>
				</TD>
				<TD>
					<A HREF = "#">
						ABC<BR><IMG SRC = "#" ALT = "ABC" style="width:500px;height:200px;">
					</A>
				</TD>
				<TD>
				</TD>
			</TR>
			<TR>
				<TD>
					<A HREF = "#">
						ABC<BR><IMG SRC = "#" ALT = "ABC" style="width:256px;height:256px;">
					</A>
				</TD>
				<TD>
					<A HREF = "#">
						ABC<BR><IMG SRC = "#" ALT = "ABC" style="width:256px;height:256px;">
					</A>
				</TD>
				<TD>
				
					<A HREF = "#">
						 ABC<BR><IMG SRC = "#" ALT = "ABC" style="width:256px;height:128px;">
					</A>
					<A HREF = "#">
						<BR><IMG SRC = "#" ALT = "ABC" style="width:256px;height:128px;">
					</A>
				</TD>
			</TR>
			<TR>
				<TD>
					<A HREF = "#">
						 ABC <BR><IMG SRC = "#" ALT = "ABC" style="width:256px;height:256px;">
					</A>
				</TD>
				<TD>
					<A HREF = "#">
						 ABC <BR><IMG SRC = "#" ALT = "ABC" style="width:256px;height:256px;">
					</A>
				</TD>
				<TD>
				</TD>
			</TR>
			
		</TABLE>-->
		
	</BODY>
</HTML>
			