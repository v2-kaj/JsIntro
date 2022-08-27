<!DOCTYPE html>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create Account</title>
	<link rel="stylesheet" href="styles.css"/>
</head>
<body>
	<div class='row'>
		<div id='header' class='col-12'><h1>Hello and Welcome to My Site<h1></div>
	</div>
	<div class='row'>
		<div class='col-4'></div>
		<div class='col-4'>
			<h3>Create Your Account</h3>
			<form action="create-account.php" method="POST">
				<input type="text" name="username" placeholder='username'/>
				<br>
				<br>
				<input type="password" name="password"  placeholder='password' />
				<br>
				<br>
				<input type="submit" value="Create Account"/>	
			</form>
			<br>
			<a href='index.php'>Login</a>
		</div>
		<div class='col-4'></div>
	</div>
</body>
</html>