<?php

    session_start();
    session_destroy();

    if (isset($_COOKIE['Email'])) {
        $email = $_COOKIE['Email'];
        setcookie('Email', $email, time()-1, '/');
    }
    
    echo "You successfully logout.  <br> Click <a href=login.php>here</a> to login again";

?>