<!DOCTYPE html>
<html>
<head>
	<title>Halaman Register</title>
</head>
<body>

	<h1>Register</h1>

	<form method="POST" action="/registration-procces">
		@csrf
		<label>
			Nama
			<input type="text" name="name">
		</label>
		<br><br>
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
		<button>Register</button>
	</form>
<a href="/login"> <<.Login</a>
</body>
</html>