<?php
    session_start();
    if(!$_SESSION['full_name'])
    {
        header("Location: externaluser.html");//redirect to login page to secure the welcome page without login access.
    }

?>
