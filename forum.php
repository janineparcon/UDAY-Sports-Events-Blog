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
					<li><a href="userhome.php">Home</a></li>
					<li><a href="usernews.php">News</a></li>
				<li><a href="userabout.php">About</a></li>
				<li class="active"><a href="forum.php">Create</a></li>
				</ul>
				<div class="nav-login">
					<form action="logout.php" method="POST">
						<button type="submit" name="logoutbtn">Logout</button>
					</form>
				</div>
			</div>
		</nav>
	</header>

<form>
<div>
<input class="title" type="text" onfocus="this.value=''" placeholder="Title">
<div>
<textarea rows="3" placeholder=" Enter text here..."></textarea>
</div>
<button type = submit name="articlebtn">Submit</button>
</form>
</div>

</body>
</html>
