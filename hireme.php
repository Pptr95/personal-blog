<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="UTF-8">
		<title>Petru Potrimba's Blog</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<link rel="icon" href="res/test.jpg">
		<link rel="stylesheet" href="test.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>

	<?php require 'header.php';?>
  <?php require_once 'dbconnection.php';?>

	<div class="container">
			<div class="row">
			  <div class="col-sm-9" id="mydiv">
							<div class="row">
                <h6><a href="https://docs.google.com/document/d/1uRTHiM3hcZdW-yiOXaePntyEPhLF6EqoH1Ir0WFn8Js/edit?usp=sharing">If you can not see the curriculm, click here.</a></h6>
                <embed id="content" src="resume/Resume.pdf" width="100%" height="800px">
							</div>
					</div>
		  		<div class="col-sm-3"><?php require 'most_popular.php'?></div>
			</div>
			<div class="row">
					<div class="col-sm-12">
							<!-- <?php require 'footer.php'?> -->
					</div>
			</div>
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script></body>
</html>
