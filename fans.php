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
		
		<style>
			table, th, td {
			  border: 1px solid black;
			  border-collapse: collapse;
			 
			}
		</style>
		
	</head>
	
	<body>
		
		<div id="wrapper"><!--style="height:1420px;background-color:#DE0000;"-->
			
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
				<h2 id="mainhead">!OUR FAN BASE!</h2>
				<br/><br/><br/><br/>
				
				
				
				
				<form action="fans.php" method="post" style="text-align:center">
					<label>
						Province:
							<select name="province">
								<option value="1">Alberta</option>
								<option value="2">British Columbia</option>
								<option value="3">Manitoba</option>
								<option value="4">New Brunswick</option>
								<option value="5">Newfoundland</option>
								<option value="6">Northwest Territories</option>
								<option value="7">Nova Scotia</option>
								<option value="8">Nunavut</option>
								<option value="9">Ontario</option>
								<option value="10">PEI</option>
								<option value="11">Quebec</option>
								<option value="12">Saskatchewan</option>
								<option value="13">Yukon</option>
							</select>
					</label>
					<label>
						Interests:
						<select name="interest">
							<option value="1">Freestyling</option>
							<option value="2">Skateboarding</option>
							<option value="3">Raving</option>
							<option value="4">Buying Vlone Merch</option>
							<option value="5">Hitting Boof</option>
						</select>
					</label>
					<input type="submit" value="search">
				</form>
				<br/><br/>
				<table style="margin-left:auto;margin-right:auto;">
					<thead>
						<th>Title</th>
						<th>First Name</th>
						<th>Last Name</th>
						
					</thead>
					<tbody>
						<?php
							$conn = mysqli_connect('localhost', 'root', '', 'fams_db');
			
							if (mysqli_connect_errno())  {
								die('Unable to connect');
							}  else  {
								echo('<p style="text-align:center;">DB connection successful!</p>');
							}
							
							if (!empty($_POST))  {
								$provinceId = $_POST['province']; //ID of province
								$interestId = $_POST['interest']; //ID of interest
								
								$sql = 'SELECT DISTINCT firstname, lastname, title FROM fans
											left join fans_interests on fans.id = fans_interests.interest_id
											WHERE fans_interests.interest_id = "' . $interestId . '" || fans.province_id = "' . $provinceId . '"';
								
								$result = mysqli_query($conn, $sql);
								
								while ($row = mysqli_fetch_assoc($result)) {
									$title = $row['title'];
									$fn = $row['firstname'];
									$ln = $row['lastname'];
									
									echo '<tr>';
									echo '<td>' . $title . '</td>';
									echo '<td>' . $fn . '</td>';
									echo '<td>' . $ln . '</td>';
									echo '</tr>';
									
								}
								
								mysqli_free_result($result);
							}
						?>
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