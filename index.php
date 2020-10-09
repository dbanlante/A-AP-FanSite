<!DOCTYPE html>
<html>
	<head>
		<title>
			ASAP-MOB.com
		</title>
		
		<meta charset="UTF-8" />
		
		<!--This is the SEO change i made to the description-->
		<meta name="description" content="This is a fansite for ASAP MOB">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="index.css" />
		
		<link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="./images/favicon.ico" type="image/x-icon">
		
	</head>
	
	<body>
		
		<div id="wrapper">
			
			<!--TOP BLOCK-->
			<?php
				include('./includes/banner.php');
			?>
			
			
			<!--LEFT COLUMN-->
			<?php
				include('./includes/leftblock.php');
			?>
			
			<!--RIGHT SECTION-->
			<div class="middle" id="rightblock">
				<iframe src="https://giphy.com/embed/xUOwG6NpiLk5ZS82xW" width="20%" height="20%" style="float:left;border-width:0px;" ></iframe>
				<iframe src="https://giphy.com/embed/xUOwG6NpiLk5ZS82xW" width="20%" height="20%" style="float:right;border-width:0px;" ></iframe>
				<h2 id="mainhead">~~~~~~~~AWGE.COM~~~~~~~~</h2>
				
				<h4 style="text-align:center;">RULES</h4>
				<p style="text-align:center;">
					#1 NEVER REVEAL WHAT AWGE MEANS<br />
					#2 WHEN IN DOUBT ALWAYS REFER TO RULE ONE<br />
				</p>
				
				<img src="./images/testing.jpg" alt="Testing by Asap Rocky album cover" id="testingimg" width="300px" height="300px" />
				
				<p style="text-align:center;">
					Testing is the third studio album by American rapper ASAP Rocky. It was released on May 25,
					2018, by ASAP Worldwide, Polo Grounds Music and RCA Records. The album includes guest appearances
					from Frank Ocean, Kid Cudi, Skepta, French Montana, Kodak Black, Dev Hynes and FKA Twigs, among others,
					and was produced primarily by Hector Delgado and ASAP Rocky himself, alongside a variety of high-profile
					record producers
				</p>
			</div>
			
			<!--BOTTOM BLOCK-->
			<?php 
				include('./includes/bottomblock.php');
			?>
		</div>
	</body>
</html>