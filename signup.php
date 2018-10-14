<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<header>
		<nav>
			<div class="main-wrapper">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="news.php">News</a></li>
				<li><a href="about.php">About</a></li>
				</ul>
				<div class="nav-login">
					<form>
						<input type="text" name="uid" placeholder="Username/Email">
						<input type="password" name="pwd" placeholder="Password">
						<button type="submit" name="submit">Login</button>
					</form>
					<a href="signup.php">Sign Up</a>
				</div>
			</div>
		</nav>
	</header>

	<section class="main-container">
		<div class="main-wrapper">
			<h2>Sign Up</h2>
			<form class="signup-form" action="register.php" method="POST">
				<input type="text" name="first" placeholder="First Name">
				<input type="text" name="last" placeholder="Last Name">
				<input type="text" name="email" placeholder="Email Address">
				<input type="text" name="uid" placeholder="Username">
				<input type="password" name="pwd" placeholder="Password">
				<button type="submit" name="submit">Sign Up</button>
			</form>
		</div>
	</section>

</body>
</html>
