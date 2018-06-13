<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
		<style>
		#pic{
			width:150px;
			height:150px;
			}
		.col-sm-4{
			border:1px solid lightgray;
		}
		.row {
        	margin-bottom: 10px;
        	padding-top: 15px
        	
    	}
		</style>

		<title> 목걸이 </title>	
		
	</head>
	<body>
		<?php	include("header.php"); //header 삽입 ?>
		<p align="center"><a href="home.php"><img src="img/accsolee2.jpg"  style="margin-top: 50px; margin-bottom: 30px" ></a></p>	
		<?php	include("nav.php");   //nav 삽입 ?>
		
		<h5 align="left" style="margin-left: 90px; margin-top: 50px;">●  Necklace</h5>

		<div class="row" align="left" style="margin-top:50px"; >
			<div class="col-sm-4" style="margin-right: 25px; margin-left:100px;">
				<div class="row">
					<div class="col-sm">
						<img src="img/necklace.jpg" id="pic"> 
					</div>
					<div class="col-sm">
			        <p>No.</p>
			        <p>Item.</p>
			        <p>&#8361.</p>
			        <p>Explan.</p>
		        	</div>
		        </div>	
	        </div>
	        <div class="col-sm-4" style="margin-right: 25px; margin-left:100px;">
	        	<div class="row">
					<div class="col-sm">
						<img src="img/necklace2.jpg" id="pic"> 
					</div>
					<div class="col-sm">
			        <p>No.</p>
			        <p>Item.</p>
			        <p>&#8361.</p>
			        <p>Explan.</p>
		        	</div>
		        </div>	
		    </div>
		</div>


		<div class="row" align="left" style="margin-top:100px"; >
			<div class="col-sm-4" style="margin-right: 25px; margin-left:100px;">
				<div class="row">
					<div class="col-sm">
						<img src="img/necklace3.jpg" id="pic"> 
					</div>
					<div class="col-sm">
			        <p>No.</p>
			        <p>Item.</p>
			        <p>&#8361.</p>
			        <p>Explan.</p>
		        	</div>
		        </div>	
	        </div>
	        <div class="col-sm-4" style="margin-right: 25px; margin-left:100px;">
	        	<div class="row">
					<div class="col-sm">
						<img src="img/necklace4.jpg" id="pic"> 
					</div>
					<div class="col-sm">
			        <p>No.</p>
			        <p>Item.</p>
			        <p>&#8361.</p>
			        <p>Explan.</p>
		        	</div>
		        </div>	
		    </div>
		</div>


		<div class="row" align="left" style="margin-top:100px; margin-bottom:150px;" >
			<div class="col-sm-4" style="margin-right: 25px; margin-left:100px;">
				<div class="row">
					<div class="col-sm">
						<img src="img/necklace5.jpg" id="pic"> 
					</div>
					<div class="col-sm">
			        <p>No.</p>
			        <p>Item.</p>
			        <p>&#8361.</p>
			        <p>Explan.</p>
		        	</div>
		        </div>	
	        </div>
	        <div class="col-sm-4" style="margin-right: 25px; margin-left:100px; ">
	        	<div class="row">
					<div class="col-sm">
						<img src="img/necklace6.jpg" id="pic"> 
					</div>
					<div class="col-sm">
			        <p>No.</p>
			        <p>Item.</p>
			        <p>&#8361.</p>
			        <p>Explan.</p>
		        	</div>
		        </div>	
		    </div>
		</div>





		<!--
		<div class="btns" align="center" style="margin-top: 150px; padding-right: 100px;">
		<button class="btn btn-outline-dark">1</button>
		<button class="btn btn-outline-dark">2</button>
		<button class="btn btn-outline-dark">3</button>
		
		</div>
		-->
		<?php	include("footer.php"); //footer 삽입 ?>
	</body>
</html>