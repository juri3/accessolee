<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

		<title> 메인-top </title>	
		<style>
			#fixedtop{
				width:100%;
				position: fixed;
				top: 0px;
				left: 0px;
				background-color:white;
				z-index: 1; 
			}
		</style>
	</head>
	<body>
		<header id="fixedtop">
			<div class="row1"  height="40px" style="border:1px solid lightgray; padding-left: 50px; background-color:white;">
				<button type="button" class="btn btn-light" onclick="location.href='login.php'">로그인</button>
				<button type="button" class="btn btn-light" onclick="location.href='signup.php'">회원가입</button>
				<button type="button" class="btn btn-light">장바구니</button>
			</div>
		</header>
	</body>
</html>