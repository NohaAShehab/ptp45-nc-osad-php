<?php

// check if user hass session

session_start();

if (isset($_SESSION['login']) and $_SESSION['login']==true) {
    $_SESSION = array();
    session_destroy();

    echo "deleted";;;;
    # redirect to login
    header("Location: login.php");
}else{
    echo "You are not logged in";
}