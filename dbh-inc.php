<?php

$conn = mysqli_connect("localhost","root","");

//Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MYSQL: " . myaqli_connect_error();
}
else {
	echo "You have successfully connected to MYSQL";
}

?>
