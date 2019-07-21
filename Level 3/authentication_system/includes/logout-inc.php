<?php
    session_start();
    session_unset(); //deletes values in session variables
    session_destroy(); //destroys session
    echo "Session destroyed. Redirecting...";
    sleep(1);
    header("Location: ../index.php"); //redirects back to index
    exit();
?>