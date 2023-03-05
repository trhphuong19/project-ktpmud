<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page in HTML with CSS Code Example</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="box-form">
	<div class="left">
		<div class="overlay">
			<div>
				<img src="./logo/334289923_208962011652827_8333286655507189973_n.png"/>
			</div>
			<h1>APD-Klasse</h1>
			<p>Hệ thống hỗ trợ quản lý sinh viên </p>
			<p>Xây dựng và phát triển bởi nhóm 2-APD_Team </p>
			<p> Trường Đại học Bách khoa Hà Nội</p>
			
		</div>
	</div>
	
	
	<div class="right">
		<form action="./logic/login.php" method="post">
			<h5 style="text-align: center;" >Đăng nhập</h5>
			<div class="inputs">
				<input type="text" name="user" placeholder="Tài khoản">
				<br>
				<input type="password" name="password" placeholder="Mật khẩu">
			</div>
				
				<br><br>
				
			<div class="remember-me--forget-password">
					<!-- Angular -->
				<label>
					<input type="checkbox" name="item" checked/>
					<span class="text-checkbox">Nhớ mật khẩu</span>
				</label>
			</div>
				<br>
				<button>Đăng nhập</button>
		</form>
	</div>
		
</div>
<!-- partial -->
  
</body>
</html>