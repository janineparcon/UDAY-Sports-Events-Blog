<?php 
	include "dbh-inc.php";

	    if(isset($_POST['loginbtn'])){
        $username = $_POST['uid'];
        $password = $_POST['pwd'];
        $sql = "SELECT * From users WHERE Username ='$username'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            if ($row['UserPassword'] == $password) {
                session_start();
                echo "Welcome user!";
                $_SESSION['message'] = "You are now logged in!";
                $_SESSION['username'] = $username;
                header("location: userhome.php");
            }
            else {
                echo "Wrong password!";
            }
          }
          else{
              echo "no user found";
          }
    }
?>