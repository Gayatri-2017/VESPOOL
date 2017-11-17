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
			<link rel="stylesheet" href="VESPOOLCSS.css">
			
				
	</HEAD>
	<BODY >
		<!--<div class="bodyclass"></div>-->
		<div class="bodyclass">
			<img src="vespool\myrik.jpg">
		</div>
		<h1 class="pga-center">
			<IMG SRC = "vespool/Rickshaw.png" width="25" height="25">
			<font face="MV Boli" size = "5"><B>VESPOOL</B></font>
			<IMG SRC = "vespool/Rickshaw.png" width="25" height="25">
		</h1>
		<!--<H4 class=" pga-center">
			VESPOOL
		</H4>
		<div class="pga-logo" ><img src="rikshaw1.jpeg"></div>
	-->
				<!--<div class="image img-aa">
  					<p>VESPOOL</p>
					<img class="object-fit_contain " src="rikshaw1.jpeg">
				</div>-->
		<div class="pga-dropdown">
			
			<button class="pga-dropbtn pga-dd" >
				Menu
			</button>
			<div class="pga-dropdown-content">
				<a href="VESPOOL.php">Home</a>
				<a href="About_Us.php">About Us</a>
				
			</div>
		</DIV>
		
		<!--<DIV style="float:right;">-->
		<DIV>
			<button class="pga-dropbtn pga-cc pga-dropdown" >
				<a href = "logout.php" style="color: yellow">
					Sign Out
				</a>
			</button>
		</div>
		
		<!--<DIV style="float:right;">-->
		<DIV>	
				
				
				<?php
					if(!isset($_SESSION['login_user'])){
						echo "
						<button class='pga-dropbtn pga-ff'>
							<a href = 'SIGN UP.html' style='color: yellow'>
								Sign in
							</a>
						</button>
						</div>";
					}
					else {
						
						echo "
							<button class='pga-dropbtn pga-ff'>
								<a href = '' style='color: yellow'>
									$user1
								</a>
							</button>
						</div>";
					
					}
				?>
				
			
		</div>
		
		<!--<DIV style="float:right;">-->
		<DIV>	
			<button class="pga-dropbtn pga-aa" >
				<a href style="color: yellow" = "Register.html">
					Register
				</a>
			</button>
		</div>
		
		<!--<DIV style="float:left;">-->
		<DIV>
			<button class="pga-dropbtn pga-ee"  >
				<a href  = "VESPOOL.php" style="color: yellow">
					Home
				</a>
			</button>
		</div>


		<BR><BR></BR></BR>
		
		<P class="pga-style2">
			<b>What is VESPOOL?</b>
		</P>
		
		<p class="pga-style4" >
			<b>VESPOOL lets you save your travel cost by allowing you to share your ride with other VESPOOL users travelling along your route.</b>
		</p>
		<BR><br><br>
		<P class="pga-style2">
			<b>How can I use VESPOOL?</b>
		</P>
		
		<p class="pga-style4">
			<b>To find the required ride sharer on VESPOOL, all you would need to do is to register and login to your VESPOOL account. Enter your pickup and drop locations, select your status as Single rider or double rider and click on ‘View Nearby users’. </b>
			<BR>
			<b>After pairing up with a ride sharer, a chatbox would open up to enable communication. After the ride, you can click on Complete Ride and give your FeedBack.</b>
		</p>
		<BR>
		<br>
		<P class="pga-style2">
			<BR><BR><b>What if I don't find a co-passenger to share my ride?</b>
		</P>
		<BR><BR><BR>
		<p class="pga-style4">
			<b>You may choose to wait and refresh the page for sometime or may proceed alone or with a single ride sharer.</b>
		</p>
		<br><br>
		<marquee >
  
    <h2><b>New feature : You can now fix the priorities for other users.</b></h2>
  </marquee>

		
		
		
	</BODY>
</HTML>