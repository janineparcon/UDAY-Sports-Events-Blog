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
					<li class="active"><a href="userhome.php">Home</a></li>
					<li><a href="usernews.php">News</a></li>
				<li><a href="userabout.php">About</a></li>
				<li><a href="forum.php">Create</a></li>
				</ul>
				<div class="nav-login">
					<form action="logout.php" method="POST">
						<button type="submit" name="logoutbtn">Logout</button>
					</form>
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