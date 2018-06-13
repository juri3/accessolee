<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
		<style>
			table {
   				width: 30%;
    			border: 1px solid lightgray;
    			border-collapse: collapse;
    			margin-top: 30px;
    			margin-bottom: 30px;
  			}
  			th, td {
			    border: 1px solid lightgray;
			    padding: 10px;
			}
		</style>

		<title> 로그인페이지 </title>	
		
	</head>

	<body>
		<?php	include("header.php"); //header 삽입 ?>
		<p align="center"><a href="home.php"><img src="img/accsolee2.jpg"  style="margin-top: 50px; margin-bottom: 30px" ></a></p>	
		<?php	include("nav.php");   //nav 삽입 ?>
		<div class="container">
			<form class="form-inline" role="form" align="center">
	    		<label for="email2" class="mb-2 mr-sm-2">ID:</label>
	    		<input type="text" class="form-control mb-2 mr-sm-2" id="userid" placeholder="Enter email"><br>
	    		<label for="pwd2" class="mb-2 mr-sm-2">Password:</label>
	    		<input type="text" class="form-control mb-2 mr-sm-2" id="pwd2" placeholder="Enter password">
	    	</form>	
			<div class="col-xl-span4" align="center">
				<button class="btn btn-outline-secondary" width="35px" style="margin-bottom: 5px">로그인</button><br>
				<button class="btn btn-outline-info" width="35px">회원가입</button>
			</div>
		</div>
		<?php	include("footer.php"); //footer 삽입 ?>
	</body>
</html>