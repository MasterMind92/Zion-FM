<!DOCTYPE html>
<html>
	<head>
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet" >
		<meta charset="utf-8">
		<title></title>
		<style type="text/css">
			#post{
				padding: 0px;
			}
		</style>
	</head>
	<body>

	<div class="row">
		<div id="post" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php 
				for ($i=0; $i <5 ; $i++) { 
			?>

			<div class="panel panel-default">
				<div class="panel-body">
				   <div class="media">
						<a class="pull-left" href="#">
							<img class="media-object" src="../img/youtube.png" alt="Image">
						</a>
						<div class="media-body">
							<h4 class="media-heading">Youtube Said:</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.
							</p>
						</div>
					</div>
				</div>
			</div>
			<?php
				}
			 ?>		
		</div>
	</div>
	
		

	<!-- jQuery -->
	<script src="../js/JQuery.min.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="../js/bootstrap.min.js"></script>
	<script>
		$(function(){

		})
	</script>
	</body>
</html>