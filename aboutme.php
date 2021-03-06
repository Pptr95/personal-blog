<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="UTF-8">
		<title>Petru Potrimba's Blog</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<link rel="icon" href="article/img/pp.png">
		<link rel="stylesheet" href="css2.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style media="screen">
		@font-face {
			font-family: GraublauWeb;
			src: url("font/OlsenTF-Regular.otf") format("opentype");
		}

		.abm, .intro2 {
			font-family: GraublauWeb;
		}

		.leadthefuture:hover {
			color: #EA9629 !important;
		}

		</style>
	</head>
	<body>

	<?php require 'nav.html';?>
  <?php require_once 'dbconnection.php';?>

	<div class="container">
			<div class="row">
			  <div class="col-sm-9" id="mydiv">
							<div class="row">
								<div class="col-sm-12">
										<h1 class="abm" style="padding-top: 5%;">About Me</h1>
								</div>
							</div>
							<div class="col">
								<div style="float:left; padding-right: 4%;"><img style="padding-bottom: 10%;" width="300" height="auto" src="article/img/mee.jpg" alt="Photo article"></div>
								<div style="float:none;">
										<p style="font-size: 100%;" class="intro2">

Hello there! I am Petru and I am a Master's Degree student of Artificial Intelligence at Bologna University (Italy) with a background in Computer Science and Engineering. <br><br>

I am interested in AI (Deep Learning and Computer Vision especially) and I use this blog to publish my researches and experiments.
I am use to deeply study and implement the algorithms from scratch, this helps me to really understand what actually happens under the hood and hopefully to be helpful for the others. <br><br>

Recently, I have been selected to take part of <a class="leadthefuture" style="color: #BC360A;" href="https://leadthefuture.tech/" target="_blank">LeadTheFuture</a> network: a leading mentorship non-profit organization for students in STEM,
with acceptance rate below 20%. LeadTheFuture empowers top-performing students to achieve their goals and contribute to their communities
by giving them one-on-one guidance from high-impact mentors coming from the world's leading STEM innovation hubs such as Silicon Valley and CERN. <br><br>

I worked for several months as Software Engineer in different companies but sooner I started to deep into Data Science and Machine Learning world.
The jump to Data Science was not quite immediate. Ironically, the fact that in my Bachelor's Degree I did not anything about ML helped me a lot in this process.
It obliged me to give nothing for granted, roll up my sleeves and start a brand new learning journey. Good thing is, so far, it has been a real blast! <br><br>

As a result, I now love doing research and projects on Machine Learning trying always to understand what is happening under the hood. <br><br>

I have a strong interest for science and therefore I am interested in pursuing a PhD and Research Scientist positions. <br><br>

When I am not contemplating with a Jupyter Notebook you might find me swimming, playing basketball in some courts, visiting some cool places or playing videogames.

										</p>

								</div>
						 </div>
					</div>
		  		<div class="col-sm-3"><?php require 'most_popular.php'?></div>
			</div>
</div>
<?php require 'footer.html'?>
</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</html>
