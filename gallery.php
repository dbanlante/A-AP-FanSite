<html>
	<head>
		<title>
			Gallery
		</title>
		
		<!--This is the SEO change i made to the description-->
		<meta name="description" content="This is a fansite for ASAP MOB">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="index.css" />
		
		<style>
			* {
			  box-sizing: border-box;
			}

			/* Position the image container (needed to position the left and right arrows) */
			.container {
			  position: relative;
			}

			/* Hide the images by default */
			.mySlides {
			  display: none;
			}

			/* Add a pointer when hovering over the thumbnail images */
			.cursor {
			  cursor: pointer;
			}

			/* Next & previous buttons */
			.prev,
			.next {
			  cursor: pointer;
			  position: absolute;
			  top: 40%;
			  width: auto;
			  padding: 16px;
			  margin-top: -50px;
			  color: white;
			  font-weight: bold;
			  font-size: 20px;
			  border-radius: 0 3px 3px 0;
			  user-select: none;
			  -webkit-user-select: none;
			}

			/* Position the "next button" to the right */
			.next {
			  right: 0;
			  border-radius: 3px 0 0 3px;
			}

			/* On hover, add a black background color with a little bit see-through */
			.prev:hover,
			.next:hover {
			  background-color: rgba(0, 0, 0, 0.8);
			}

			/* Number text (1/3 etc) */
			.numbertext {
			  color: #f2f2f2;
			  font-size: 12px;
			  padding: 8px 12px;
			  position: absolute;
			  top: 0;
			}

			/* Container for image text */
			.caption-container {
			  text-align: center;
			  background-color: #222;
			  padding: 2px 16px;
			  color: white;
			}

			.row:after {
			  content: "";
			  display: table;
			  clear: both;
			}

			/* Six columns side by side */
			.column {
			  float: left;
			  width: 16.66%;
			}

			/* Add a transparency effect for thumnbail images */
			.demo {
			  opacity: 0.6;
			}

			.active,
			.demo:hover {
			  opacity: 1;
			}
		</style>
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
				<script>
					var slideIndex = 1;
					showSlides(slideIndex);

					// Next/previous controls
					function plusSlides(n) {
					  showSlides(slideIndex += n);
					}

					// Thumbnail image controls
					function currentSlide(n) {
					  showSlides(slideIndex = n);
					}

					function showSlides(n) {
					  var i;
					  var slides = document.getElementsByClassName("mySlides");
					  var dots = document.getElementsByClassName("demo");
					  var captionText = document.getElementById("caption");
					  if (n > slides.length) {slideIndex = 1}
					  if (n < 1) {slideIndex = slides.length}
					  for (i = 0; i < slides.length; i++) {
						slides[i].style.display = "none";
					  }
					  for (i = 0; i < dots.length; i++) {
						dots[i].className = dots[i].className.replace(" active", "");
					  }
					  slides[slideIndex-1].style.display = "block";
					  dots[slideIndex-1].className += " active";
					  captionText.innerHTML = dots[slideIndex-1].alt;
					}
				</script>
				<!-- Container for the image gallery -->
				<div class="container">

				  <!-- Full-width images with number text -->
				  <div class="mySlides">
					<div class="numbertext">1 / 6</div>
					  <img src="./images/mob.jpg" style="width:100%">
				  </div>

				  <div class="mySlides">
					<div class="numbertext">2 / 6</div>
					  <img src="./images/mob2.jpg" style="width:100%">
				  </div>

				  <div class="mySlides">
					<div class="numbertext">3 / 6</div>
					  <img src="./images/mob3.jpg" style="width:100%">
				  </div>

				  <div class="mySlides">
					<div class="numbertext">4 / 6</div>
					  <img src="./images/mob4.jpg" style="width:100%">
				  </div>

				  <div class="mySlides">
					<div class="numbertext">5 / 6</div>
					  <img src="./images/mob5.jpg" style="width:100%">
				  </div>

				  <div class="mySlides">
					<div class="numbertext">6 / 6</div>
					  <img src="./images/mob6.jpg" style="width:100%">
				  </div>

				  <!-- Next and previous buttons -->
				  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				  <a class="next" onclick="plusSlides(1)">&#10095;</a>

				  <!-- Image text -->
				  <div class="caption-container">
					<p id="caption"></p>
				  </div>

				  <!-- Thumbnail images -->
				  <div class="row">
					<div class="column">
					  <img class="demo cursor" src="./images/mob.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Mob">
					</div>
					<div class="column">
					  <img class="demo cursor" src="./images/mob2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Music Video Shoot">
					</div>
					<div class="column">
					  <img class="demo cursor" src="./images/mob3.jpg" style="width:100%" onclick="currentSlide(3)" alt="RIP YAM$">
					</div>
					<div class="column">
					  <img class="demo cursor" src="./images/mob4.jpg" style="width:100%" onclick="currentSlide(4)" alt="OG Gang">
					</div>
					<div class="column">
					  <img class="demo cursor" src="./images/mob5.jpg" style="width:100%" onclick="currentSlide(5)" alt="BAPE">
					</div>
					<div class="column">
					  <img class="demo cursor" src="./images/mob6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Concert">
					</div>
				  </div>
				</div>
			</div>
			<!--BOTTOM BLOCK-->
			<?php
				include('./includes/bottomblock.php');
			?>
			
		</div>
	</body>
</html>