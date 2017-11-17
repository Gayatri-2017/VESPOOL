<?php
	session_start();
	if(isset($_SESSION['login_user'])){
		$user1 = $_SESSION['login_user'];
	}
?>
<!DOCTYPE HTML>
<HTML>
	<HEAD>
			<meta charset="UTF-8">
			<link rel="icon" href="Rickshaw.png">
			<TITLE>
				VESPOOL
			</TITLE>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="VESPOOLCSS.css">
			<style>
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
	<BODY style = "background-color:powderblue">
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
					<!--<button class='pga-dropbtn pga-bb'>-->
						<a href = 'SIGN UP.html' style='color: yellow'>
							Sign in
						</a>
					<!--</button>-->
					<!--</div>-->";
				}
				else {
					
					echo "
						<!--<button class='pga-dropbtn pga-bb'>-->
							<a href = '' style='color: yellow'>
								$user1
							</a>
						<!--</button>-->
					<!--</div>-->";
				
				}
			?>
			<a href = "logout.php">Sign Out</a>
			<div class="dropdown1">
				<button class="dropbtn1">Menu 
				  
				</button>
				<div class="dropdown-content1">
				  <a href="VESPOOL.php">Home</a>
					<a href="Overview.php">Overview</a>
			  
				</div>
			</div> 
		</div>





		<div class="pg3-desc pg3-container pga-style4" >	
			<div class = "pga-style4">
				<h4>
					Address:
				</h4>
				
				
				<!--<IMG SRC = "https://www.azsos.gov/sites/azsos.gov/files/businessV1.png" ALT = "Telephone" height = "50" WIDTH = "50">-->
				<IMG SRC = "vespool/address.png" ALT = "address" height = "50" WIDTH = "50">
				<IMG SRC = "vespool/address1.png" ALT = "address" height = "75" WIDTH = "75">
				<address>
					<h4>
						VESPOOL
					</h4>
				<!--<BR>-->
					Bldg 56-A,<BR>
					Satya Nagar,<BR>
					Sakinaka,<BR>
					Mumbai, Maharashtra 400072<BR>
				</address>
			</div>
			<div>
			</div>
			<div class = "pga-style4">
				<h4><BR><BR><BR><BR><BR><BR><BR><BR><BR>
					Phone: &nbsp;(022) 2311 2142&nbsp;
					<!--IMG SRC = "http://cdn.mysitemyway.com/etc-mysitemyway/icons/legacy-previews/icons/rounded-glossy-black-icons-business/086364-rounded-glossy-black-icon-business-phone-solid.png" ALT = "Telephone" height = "50" WIDTH = "50">-->
					
					<IMG SRC = "vespool/phone.png" alt = "phone" height = "50" WIDTH = "50">
					
				<BR>
					<a href = "mailto:vespool@gmail.com">Email: vespool@gmail.com </A>
					<IMG SRC = "vespool/email.png" ALT = "email" height = "50" WIDTH = "50">
				</h4>
			</div>
			
			<p class="pga-style4">
			<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
				What do you think?  Will ride -sharing help reduce the traffic in your city? Or it is too much trouble? Send us your comments, suggestions to<a href = "mailto:vespool@gmail.com"> vespool@gmail.com </A> and let’s keep the conversation going!
			</P>
			<br><br>
	</BODY>
</HTML>