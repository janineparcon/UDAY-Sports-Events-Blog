<?php
    include "dbh-inc.php";

    // Ends the session with session_destroy()
    session_start();
    session_unset();
    session_destroy();
    // redirects the page back to the homepage
    header("location: index.php");
?>
