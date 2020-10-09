<!DOCTYPE html>
<html>
	<head>
		<title>
			INFO
		</title>
		
		<style>
			body {
			  font-family: arial;
			}
			.hide {
			  display: none;
			}
			p {
			  font-weight: bold;
			}
		</style>
		
		<meta charset="UTF-8" />
		<!--This is the SEO change i made to the description-->
		<meta name="description" content="This is a fansite for ASAP MOB">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="index.css" />
		<script src="countries.js"></script>
		<link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="./images/favicon.ico" type="image/x-icon">
		
	</head>
	
	<body>
		
		<div id="wrapper" style="height:1520px;background-color:#DE0000;">
			
			<!--TOP BLOCK-->
			<?php
				include('./includes/banner.php');
			?>
			
			<!--LEFT COLUMN-->
			<?php
				include('./includes/leftblock.php');
			?>
			
			<!--RIGHT SECTION-->
			<div class="middle" id="rightblock" ><!--style="width:800px;height:1000px;"-->
				<iframe src="https://giphy.com/embed/xUOwG6NpiLk5ZS82xW" width="20%" height="20%" style="float:left;border-width:0px;" ></iframe>
				<iframe src="https://giphy.com/embed/xUOwG6NpiLk5ZS82xW" width="20%" height="20%" style="float:right;border-width:0px;" ></iframe>
				<h2 id="mainhead">?QUESTIONS?CONCERNS?<br />CHOPPA WONT MISS?</h2>
				
				<form action="acknowledgement.php" method="post">
					<fieldset>
						<legend>
							<h3>PERSONAL INFO</h3>
						</legend>
						<h5>
							SURNAME
						</h5>
						<select name="surname" id="surname">
							<option value="ASAP">A$AP.</option>
							<option value="PLAYBOI">PLAYBOI</option>
							<option value="Mr">MR.</option>
							<option value="MRS">MRS.</option>
							<option value="MS">MS.</option>
						</select>
						<br/>
						<h5>FIR$T NAME:</h5>
						<input type="text" name="fname" id="fname" />
						
						<h5>LA$T NAME:</h5>
						<input type="text" name="lname" id="lname" />
						
						<h5>EMAIL</h5>
						<input type="text" name="email" id="email" />
						
						<h5>PHONE #</h5>
						<input type="text" name="phone" id="phone" />
						
						<br/>
						<h5>WHAT INFO YOU WANT CUZ?</h5>
						<input type="checkbox" name="music" value="music" id="music" />
							WHEN YALL RELEASING NEW MUSIC????
						</input>
						<br/>
						<input type="checkbox" name="merch" value="merch" id="merch" />
							WHEN DO I GET MY NEW VLONE MERCH????
						</input>
						<br/>
						<input type="checkbox" name="crew" value="crew" id="crew" />
							HOW DO I BECOME PART OF THE A$AP CREW????
						</input>
						<br/>
						<input type="checkbox" name="obama" value="obama" id="obama" />
							WHATS OBAMAS LAST NAME????
						</input>
						<br/>
						<input type="checkbox" name="other" value="other" id="other" />
							OTHER...
						</input>
						<br/><br/>
						<strong>What is your favourite color?</strong><br>
						Choose your favourite color: 
						<input type="color" name="favcolor" value="#000000">
						<br/>
						<h5>Select our next concert date</h5>
						Please select a date: <input type="date" name="age" value="" size=20>
						<input type="button" name="start" value="Submit Date" onclick="lifetimer(this.form)">
						
						<table>
							<tr>
								<td>
									There are <input type="text" name="time1" value=" " size=8> days until the upcoming show!
								</td>
							</tr>
						</table>
						<br/><br/>
						<strong>Where are you from?</strong><br>
						Select Country:
							<select id="country" name="country"></select><br/>
						Select Province/State:
							<select id="state" name="state"></select><br/>
							
						<script language="javascript">
							populateCountries("country", "state");
						</script>
						<br/><br/>
						
						<h5>TOUR LOCATION IDEAS?</h5>
						<input type="radio" name="answer" value="answer" id="answer" onclick="show2();"/>YES!!!<br/>
						<input type="radio" name="answer" value="answer" id="answer" onclick="show1();"/>NAH...<br/>
						<div id="textarea" class="hide">
							<textarea rows="12" cols="30" name="ideas" id="ideas" 
							placeholder="Please share what you'd like!"></textarea>
						</div>
						<script>
							function show1(){
							  document.getElementById('textarea').style.display ='none';
							}
							function show2(){
							  document.getElementById('textarea').style.display = 'block';
							}
						</script>
						<br/>
						<br/>
						<input type="submit" value="SUBMIT"/>
						<input type="reset" value="CLEAR FORM"/>
					</fieldset>
				</form>
			</div>
			
			<!--BOTTOM BLOCK-->
			<?php 
				include('./includes/bottomblock.php');
			?>
		</div>
	</body>
</html>