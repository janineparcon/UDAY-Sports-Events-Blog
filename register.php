<?php 
	include 'dbh-inc.php';

	if(isset($_POST['submit'])) {
		session_start();
		$first = mysqli_real_escape_string($conn, $_POST['first']);
		$last = mysqli_real_escape_string($conn, $_POST['last']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$username = mysqli_real_escape_string($conn, $_POST['uid']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

		$check_uname = mysqli_query($conn,"SELECT * FROM users WHERE Username = '$username'");
		$check_email = mysqli_query($conn,"SELECT * FROM users WHERE UserEmail = '$email'");
		if(mysqli_num_rows($check_uname) > 0) {
			echo "<script>
            alert('Username already existing');
            window.open('index.php','_self');
            </script>";
		}
 		elseif(mysqli_num_rows($check_email) > 0) {
			echo "<script>
            alert('Username already existing');
            window.open('index.php','_self');
            </script>";
		}
		else {
		$sql = "INSERT INTO users(UserFName, UserLName,UserEmail,Username,UserPassword) VALUES('$first', '$last','$email','$username','$pwd')";
		$result = mysqli_query($conn, $sql);
		header("location:index.php");
		}	
	}	
	
?>