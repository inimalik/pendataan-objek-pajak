<?php require_once __DIR__.'/headhtml.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>
	<div class="container">
		<form action="process/login.php" method="post">
			<div class="mb-3">
				<label for="username" class="form-label">Username</label>
				<input type="text" class="form-control" name="username" required>
			</div>
			<div class="mb-3">
				<label for="password" class="form-label">Password</label>
				<input type="password" class="form-control" name="password" required>
			</div>
			<input type="submit" class="btn btn-primary" value="Login">
		</form>
	</div>
</body>
</html>