<?php

    session_start();
    if(!$_SESSION['id'])
    {
        header("Location: ../login.html");//redirect to login page to secure the welcome page without login access.
    }


?>
