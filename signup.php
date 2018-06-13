<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
		
		<title> 회원가입 </title>	
		
	</head>
	<body>
		<?php	include("header.php"); //header 삽입 ?>
		<p align="center"><a href="home.php"><img src="img/accsolee2.jpg"  style="margin-top: 50px; margin-bottom: 30px" ></a></p>	
		<?php	include("nav.php");   //nav 삽입 ?>
		<div class="container"  align="center" style="margin-top: 50px">
		<p> 아이디       :  <input width="30px"></p>
		<p> 비밀번호     :  <input width="30px"></p>
		<p> 비밀번호확인  :  <input width="30px"></p>
		<p> 이름         :  <input width="30px"></p>
		<p> 휴대전화     :  <input style="width:50px"> - <input style="width:50px"> - <input style="width:50px"></p>
		<p> 주소         :  <input width="30px"></p>


		<div class="btns" align="center">
		<button class="btn btn-outline-info" width="35px" style="margin-right: 5px">회원가입</button>
		<button class="btn btn-outline-secondary" width="35px">취소</button>
		
		</div>
		<?php	include("footer.php"); //footer 삽입 ?>
	</body>
</html>