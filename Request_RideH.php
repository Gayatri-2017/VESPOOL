
<?php
	session_start();
	
	if(!isset($_SESSION['login_user'])){
		echo "<div class='pga-style4'><h3>You are not logged in <h3><BR></div>";
		echo "<div class='pga-style4'><h3><a href = 'SIGN UP.html'> Log in again?</a></h3></div>";
		exit();
		//header("location:login.php");
	}
	
	$user1 = $_SESSION['login_user'];
?>
<!DOCTYPE HTML>
<HTML>
	<HEAD>
		<meta charset="UTF-8">
		<link rel="icon" href="Rickshaw.png">
		<TITLE>
			Request Ride
		</TITLE>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="VESPOOLCSS.css">
		<style >
			select {
    width: 70%;
    padding: 16px 20px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;
     font-size:20px;
}
		input[type=submit]{
    background-color:#660066;
    border: none;
    color: white;
    padding: 18px 32px;
    text-decoration: none;
    margin: 5px 100px 18px;
    cursor: pointer;
    padding-bottom: 18px;

}
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
		<script type="text/javascript">
			function validateForm()		{  
				var source = document.Request_Ride.Source.value;
				var dest = document.Request_Ride.Destination.value;
				
				if(source == 'selected')		{
					alert("Select valid Source");  
					return false;
				}
			
				if(dest == 'selected')		{
					alert("Select valid Destination");  
					return false;
				}
			
				if(source == dest)	{
					alert("Source and Destination must be different");  
					return false;  
				}
			
			}
			function showfield1(name)	{
				if(name=='Other')document.getElementById('div1').innerHTML='Other: <input type="text" name="other" required/>';
				else document.getElementById('div1').innerHTML='';
			}
			function showfield2(name)	{
				if(name=='Other')document.getElementById('div2').innerHTML='Other: <input type="text" name="other" required/>';
				else document.getElementById('div2').innerHTML='';
			}
			
		</SCRIPT>
		
		<h1 class="pga-center">
			<IMG SRC = "vespool/Rickshaw.png" width="25" height="25">
			Request Ride
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
<IMG SRC = 'vespool/Rickshaw.png' ALT = 'three' height = '500' width = '500' class = 'pga-imgContainerRight' align="right">
		<!--
			<H4 class="pga-logo pga-center">
				VESPOOL
			</H4>
			
			
			<DIV style="float:right;">
			<button class="pga-dropbtn" >
				<a href = "logout.php">
					Sign Out
				</a>
			</button>
		</div>
		
		<?php
			/*if(!isset($_SESSION['login_user'])){
				echo "<DIV style='float:right;'>
					<button class='pga-dropbtn' >
						<a href = 'SIGN UP.html'>
							Sign in
						</a>
					</button>
				</div>";
			}
			else {
				echo "<DIV style='float:right;'>
					<button class='pga-dropbtn' >
						<!--<a href = 'SIGN UP.html'>-->
						<U>	$user1	</U>
						<!--</a>-->
					</button>
				</div>";*/
			
		?>
		<DIV style="float:right;">
			<button class="pga-dropbtn" >
				<a href = "Register.html">
					Register
				</a>
			</button>
		</div>
		
		<DIV style="float:right;">
			<button class="pga-dropbtn" >
				<a href = "VESPOOL.php">
					Home	
				</a>
			</button>
		</div>
		-->
		<DIV style = "margin: 0px 30%">	
			
			<H1><U>
				Request Ride
			</U></H1><BR><BR>
			<FORM name = "Request_Ride" method = "post" onsubmit = "return validateForm()" action = "Request_Ride.php" class = "pga-style2">
			
				<b>Source:<br><br></b>
					<!--<input type="text" name="Source" required>
					<br>
					<br>-->
					
					<select name="Source" onchange="showfield1(this.options[this.selectedIndex].value)">
						<option value="selected">Please select ...</option>
						<option value="Kurla Station">Kurla Station</option>
						<option value="Chembur Station">Chembur Station</option>
						<option value="VESIT" >VESIT</option>
						<option value="VESJC" >VESJC</option>
						<option value="Other">Other</option>
					</select>
					<br>
					<br>
				<div id="div1"></div>	
					
				<b><br>Destination:<br><br></b>
					<!--<input type="text" name="Destination" required>
					<br>
					<br>-->
					
					<select name="Destination" onchange="showfield2(this.options[this.selectedIndex].value)">
						<option value="selected">Please select ...</option>
						<option value="Kurla Station">Kurla Station</option>
						<option value="Chembur Station">Chembur Station</option>
						<option value="VESIT" >VESIT</option>
						<option value="VESJC" >VESJC</option>
						<option value="Other">Other</option>
					</select>
					<br>
					<br>
				<div id="div2"></div>
				
				<b><br>Ride Status:<br><br></b>
					<select name="Ride_Status">
						<option value="Single">Single</option>
						<option value="Double">Double</option>
						<!--<option value="Triple">Triple</option>-->
					</select><br><br>
				
				<input type="submit" value="Submit">
				<BR>
				<BR>
			</FORM>	
			<!--<h2><a href = "logout.php">Sign Out</a></h2>-->
		</DIV>
	</BODY>
</HTML>