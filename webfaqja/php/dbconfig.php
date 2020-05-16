<?php

    define("DBHOST","localhost");
    define("DBNAME","sign_up");
    define("DBUSER","root");
    define("DBPASS","AB1240688731ab."); 

    $con = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

    if(mysqli_connect_errno()) 
    {
        die("Lidhja ka deshtuar me mysql.".mysqli_connect_error());
    }

?>