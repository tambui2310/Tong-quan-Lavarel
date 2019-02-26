<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Đăng Nhập</h1>
	<form action="login" method="post">
		@csrf
		<p>
			<input type="text" name="username" placeholder="Tên đăng nhập">
		</p>
		<p>
			<input type="password" name="password" placeholder="Mật khẩu">
		</p>
		<p>
			<input type="submit" name="submit" value="Đăng nhập">
		</p>
	</form>
</body>
</html>