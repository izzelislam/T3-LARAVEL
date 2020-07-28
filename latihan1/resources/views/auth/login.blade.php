<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>

	<h1>Login</h1>

	<form method="POST" action="/login-procces">
		@csrf
		<label>
			Email
			<input type="email" name="email">
		</label>
		<br><br>
		<label>
			Password
			<input type="password" name="password">
		</label>
		<br><br>
		<button>login</button>
	</form>
	<a href="/register"> Register >></a>

</body>
</html>