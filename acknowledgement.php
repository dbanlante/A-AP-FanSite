<!DOCTYPE html>
<html>
	<head>
		<title>
			SUCCESS!
		</title>
		
		<link rel="stylesheet" type="text/css" href="index.css" />
		<meta charset="UTF-8" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
			
			<div class="middle" id="rightblock">
				<h1 id="ackhead" style="text-align:center;">
					<span style="color: <?php echo $_POST['favcolor'];?>">
						<?php
							$message = '';
							if (!empty($_POST))  {
								$fname = $_POST['fname'];
								$lname = $_POST['lname'];
								$email = $_POST['email'];
								$phone = $_POST['phone'];
								
								$conn = mysqli_connect('localhost', 'root', '', 'fams_db');
								
								if (mysqli_connect_errno())  {
									die('Unable to connect');
								}  else  {
									echo('<p style="text-align:center;">DB connection successful!</p>');
								}
								
								$sql = 'INSERT INTO fans (firstname, `lastname`, `email`, `phone`) VALUES("' . $fname . '", "' . $lname . '", "' . $email . '", "' . $phone . '")';
								
								$result = mysqli_query($conn, $sql);
								
								if ($result)  {
									$message = 'Added user!';
								} else  {
									$message  = 'Error occured adding user.';
								}
								
								mysqli_close($conn);
							}
							
							echo "This form was submitted on " . date("l, F t, Y") . ".";
							echo "<br/>";
							echo "Thank you, " . $fname . " for the submission!";
						?>
					</span>
				</h1>
				<h1><?php echo $message; ?></h1>
				<img src="./images/carti.jpg" alt="playboi carti self titled" id="image" />
			</div>
		</div>
		
	</body>
</html>