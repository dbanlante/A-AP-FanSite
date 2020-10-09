<!DOCTYPE html>
<html>
	<head>
		<title>
			AWGE CLOTHING
		</title>
		
		<meta charset="UTF-8" />
		<!--This is the SEO change i made to the description-->
		<meta name="description" content="This is a fansite for ASAP MOB">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="index.css" />
		<script src="sorttable.js"></script>
		
		<style>
			pimage  {
				border-radius:8px;
				padding:5px;
			}
			td.pdesc  {
				text-align:center;
			}
			td.price  {
				color:yellow;
			}
		</style>
		
		<link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="./images/favicon.ico" type="image/x-icon">
		
	</head>
	
	<body>
		
		<div id="wrapper" style="height:1320px;background-color:#DE0000;">
			
			<!--TOP BLOCK-->
			<?php
				include('./includes/banner.php');
			?>
			
			<!--LEFT COLUMN-->
			<?php
				include('./includes/leftblock.php');
			?>
			
			<!--RIGHT SECTION-->
			<div class="middle" id="rightblock"> <!--style="width:800px;height:900px;"-->
				<iframe src="https://giphy.com/embed/xUOwG6NpiLk5ZS82xW" width="20%" height="20%" style="float:left;border-width:0px;" ></iframe>
				<iframe src="https://giphy.com/embed/xUOwG6NpiLk5ZS82xW" width="20%" height="20%" style="float:right;border-width:0px;" ></iframe>
				<h2 id="mainhead">----STAY FITTED---</h2>
				
				<table class="sortable" border="2">
					<thead>
						<tr>
							<th>PIECES</th><th>WHY YOU WANT IT</th><th>PRICE</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="pimage"><img src="./images/tee1.jpg" alt="smiley vlone tee" height="150px" width="150px" id="tee1" /></td>
							<td class="pdesc"><p>LEGIT SH*T, VLONE SMILEY TEE BRAND NEW W/ THE TAGS TOO!!! YOU DONT SEE THIS EVERYDAY...</p></td>
							<td class="price">PRICE $200 [SOLDOUT]</td>
						</tr>
						<tr>
							<td class="pimage"><img src="./images/tee2.jpg" alt="blue vlone tee" height="150px" width="150px" id="tee2" /></td>
							<td class="pdesc"><p>COOL BLUE VLONE TEXT... ON A SHIRT TOO!!! IF YOU WANNA BE A RAPPER, THIS THE REAL STUFF MAN...</p></td>
							<td class="price">PRICE $250 [SOLDOUT]</td>
						</tr>
						<tr>
							<td class="pimage"><img src="./images/hood1.jpg" alt="orange vlone hoodie" height="150px" width="150px" id="hood1" /></td>
							<td class="pdesc"><p>HOT ORANGE VLONE HOODIE, WHAT YOU REPPIN IF YOU AINT REPPIN THIS??? STAY FRESH... TO THE DEATH...</p></td>
							<td class="price">PRICE $350 [SOLDOUT]</td>
						</tr>
						<tr>
							<td class="pimage"><img src="./images/hood2.jpg" alt="palm angels vlone hoodie" height="150px" width="150px" id="hood2" /></td>
							<td class="pdesc"><p>HOW YOU OUT HERE NOT WEARING VLONE? WHERES YOUR VLONE? I CANT BELIEVE YOU DONT HAVE VLONE!!! GO GET YOU SOME F**KIN VLONE!!!</p></td>
							<td class="price">PRICE $300 [SOLDOUT]</td>
						</tr>
						<tr>
							<td class="pimage"><img src="./images/shoes.jpg" alt="vlone air force 1's" height="75px" width="150px" id="shoes" /></td>
							<td class="pdesc"><p>YOU KNO WHAT WE SAY...<br/> BORN ALONE...<br/> LIVE ALONE...<br/> DIE ALONE...<br/> ---VLONE---</p></td>
							<td class="price">PRICE $2000 [SOLDOUT]</td>
						</tr>
						<tr>
							<td class="pimage"><img src="./images/wok.jpg" alt="A$AP rocky WOK" height="100px" width="150px" id="shoes" /></td>
							<td class="pdesc"><audio id="myAudio">
								  <source src="./song/wok.mp3" type="audio/mp3">
								  Your browser does not support the audio element.
								</audio>

								<p>Click the buttons to play or pause the audio.</p>

								<button onclick="playAudio()" type="button">Play Audio</button>

								<script>
								var x = document.getElementById("myAudio"); 

								function playAudio() { 
								  x.play(); 
								} 

								function pauseAudio() { 
								  x.pause(); 
								} 
								</script>
							</td>
							<td class="price">$0</td>
						</tr>
					</tbody>
				</table>
			</div>
			
			<!--BOTTOM BLOCK-->
			<?php 
				include('./includes/bottomblock.php');
			?>
		</div>
	</body>
</html>