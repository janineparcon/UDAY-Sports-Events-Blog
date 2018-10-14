<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>UDAY Sports Events</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<header>
		<nav>
			<div class="main-wrapper">
				<ul>
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="news.php">News</a></li>
				<li><a href="about.php">About</a></li>
				</ul>
				<div class="nav-login">
					<form action="login.php" method="POST">
						<input type="text" name="uid" placeholder="Username/Email">   
						<input type="password" name="pwd" placeholder="Password">
						<button type="submit" name="loginbtn">Login</button>
					</form>
					<a href="signup.php">Sign Up</a>
									</div>
			</div>
		</nav>
	</header>

	<section class="main-container">
		<div class="main-wrapper">
			<h2>UDAY SPORTS EVENTS</h2>
		</div>
	</section>

	<div id ="slider">
	<figure>
		<img src="PICTURES/FootballBoys.jpg">
		<img src="PICTURES/FootballGirls.jpg">
	</figure>
	</div>

	</body>
</html>
